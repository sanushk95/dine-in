import { getLocalUser } from "./helpers/auth";

let user = getLocalUser();

const getDefaultState = () => {
    return {
        welcomeMesage: "Welcome to Dine IN",
        currentUser: user,
        isLoggedIn: !!user,
        loading: false,
        auth_error: null,
        register_error: null,
        dishes: null,
        cart_items: [],
        users_list: [],
        food_categories: []
    }
}

export default {
    state: {
        welcomeMesage: "Welcome to Dine IN",
        currentUser: user,
        isLoggedIn: !!user,
        loading: false,
        auth_error: null,
        register_error: null,
        dishes: null,
        cart_items: [],
        users_list: [],
        food_categories: []
    },
    getters: {
        welcome(state) {
            return state.welcomeMesage;
        },
        isLoading(state) {
            return state.loading;
        },
        isLoggedIn(state) {
            return state.isLoggedIn;
        },
        currentUser(state) {
            return state.currentUser;
        },
        authError(state) {
            return state.auth_error;
        },
        registerError(state) {
            return state.register_error;
        },
        dishes(state) {
            return state.dishes;
        },
        getCartItems(state) {
            return state.cart_items;
        },
        getCartItemsTotal(state) {
            return state.cart_items.length;
        },
        getUsersList(state) {
            return state.users_list;
        },
        getCategories(state) {
            return state.food_categories;
        }
    },
    mutations: {
        login(state) {
            state.login = true;
            state.auth_error = null;
        },
        register(state) {
            state.login = true;
            state.auth_error = null;
            state.register_error = null;
        },
        loginSuccess(state, payload) {
            state.isLoggedIn = true;
            state.auth_error = null;
            state.loading = false;
            state.currentUser = Object.assign({}, payload.user, {token: payload.access_token, role: payload.role});

            localStorage.setItem("user", JSON.stringify(state.currentUser));
        },
        registerSuccess(state, payload) {
            state.isLoggedIn = true;
            state.auth_error = null;
            state.register_error = null;
            state.loading = false;
            state.currentUser = Object.assign({}, payload.user, {token: payload.access_token, role: payload.role});

            localStorage.setItem("user", JSON.stringify(state.currentUser));
        },
        loginFailed(state, payload) {
            state.loading = false;
            state.auth_error = payload.error;
        },
        registerFailed(state, payload) {
            state.loading = false;
            state.register_error = payload.error.response.data;
        },
        logout(state) {
            localStorage.removeItem("user");
            state.isLoggedIn = false;
            state.currentUser = null;
        },
        resetState(state) {
            Object.assign(state, getDefaultState());
        },
        resetErrors(state) {
            state.auth_error = null;
            state.register_error = null;
        },
        retrieveDishes(state, payload) {
            state.dishes = payload;
        },
        addToCart(state, payload) {
            state.cart_items.push(payload);

            localStorage.setItem("cart", JSON.stringify(state.cart_items));
        },
        removeFromCart(state, payload) {
            state.cart_items = state.cart_items.filter(item => item.id != payload);

            localStorage.setItem("cart", JSON.stringify(state.cart_items));
        },
        setPersistantCartData(state, payload) {
            state.cart_items = payload;
        },
        incrementQuantity(state, payload) {
            for(let i = 0; i < state.cart_items.length; i++) {
                if(state.cart_items[i].id === payload) {
                    state.cart_items[i].quantity += 1;
                    localStorage.setItem("cart", JSON.stringify(state.cart_items));
                    return;
                }
            }
        },
        decrementQuantity(state, payload) {
            for(let i = 0; i < state.cart_items.length; i++) {
                if(state.cart_items[i].id === payload) {
                    if(state.cart_items[i].quantity === 1) {
                        state.cart_items = state.cart_items.filter(item => item.id != payload);
                        localStorage.setItem("cart", JSON.stringify(state.cart_items));
                        return;
                    }

                    state.cart_items[i].quantity -= 1;
                    localStorage.setItem("cart", JSON.stringify(state.cart_items));
                    return;
                } 
            }
        },
        retrieveUsers(state, payload) {
            state.users_list = payload;
        },
        retrieveCategories(state, payload) {
            state.food_categories = payload;
        }
    },
    actions: {
        login(context) {
            context.commit("login");
        },
        register(context) {
            context.commit("register");
        }
    }
}