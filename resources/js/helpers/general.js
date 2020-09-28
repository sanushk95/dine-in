export function initialize(store, router) {
    router.beforeEach((to, from, next) => {
        const requiresAuth = to.matched.some(record => record.meta.requiresAuth);
        const currentUser = store.state.currentUser;
    
        if(requiresAuth && !currentUser) {
            next('/login');
        }
        else if((to.path == '/login' || to.path == '/register') && currentUser) {
            next('/');
        }
        else {
            next();
        }
    });
    
    axios.interceptors.response.use(null, (err) => {
        if(err.response.status === 401) {
            store.commit("logout");
            router.push("/login");
        }

        return Promise.reject(err);
    });

    //Setting Authorization Before all axios requests.
    axios.interceptors.request.use(function (config) {
        // Do something before request is sent
        if(store.getters.currentUser) {
            config.headers = {Authorization: `Bearer ${store.getters.currentUser.token}`};
        }
        return config;
        }, function (error) {
        
        // Do something with request error
        return Promise.reject(error);
    });
    /*if(store.getters.currentUser) {
        axios.defaults.headers.common["Authorization"] = `Bearer ${store.getters.currentUser.token}`;
    }*/
}