<template>
    <div class="gallery_container">
        <div class="gallery_content">
            <div class="leftbar">
                <div class="header">
                    <h3>MENU</h3>
                </div>
                <div class="filter">
                    <ul>
                        <li>
                            <a href="#" @click="filterDishes('all')">All Dishes</a>
                        </li>
                        <li>
                            <a href="#" @click="filterDishes('appetizer')">Appetizer</a>
                        </li>
                        <li>
                            <a href="#" @click="filterDishes('breakfast')">BreakFast</a>
                        </li>
                        <li>
                            <a href="#" @click="filterDishes('main_course')">Main Course</a>
                        </li>
                        <li>
                            <a href="#" @click="filterDishes('dessert')">Dessert</a>
                        </li>
                        <li>
                            <a href="#" @click="filterDishes('beverages')">Beverages</a>
                        </li>
                        <li>
                            <a href="#" @click="filterDishes('halal')">Halal</a>
                        </li>
                        <li>
                            <a href="#" @click="filterDishes('vegan')">Vegan</a>
                        </li>
                        <li>
                            <a href="#" @click="filterDishes('gluten_free')">Gluten Free</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="dishes pb-4">
                <a href="#" data-toggle="modal" @click="loadData(dish.id)" data-target="#dishesModal" v-for="dish in allDishes" v-bind:key="dish.id" :class="[dish.dish_categories ? dish.dish_categories.category_name : '', dish.is_halal ? 'halal' : '', dish.is_vegan ? 'vegan' : '', dish.is_glutenfree ? 'gluten_free' : '']"> 
                    <img :src="dish.image" alt="Dishes">
                </a>
            </div>
        </div>

        <div v-if="this.currentDish" class="modal fade" id="dishesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-dark text-white">
                        <h5 class="modal-title" id="exampleModalCenterTitle">{{currentDish[0].name}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row p-2">
                            <div class="col-md-4 mb-3">
                                <img :src="currentDish[0].image" alt="dish_image">
                            </div>
                            <div class="col-md-8 p-4">
                                <div class="row pb-3">
                                    <h4>Description:</h4> {{ currentDish[0].description }}
                                </div>

                                <div class="row pb-3">
                                    <h4>Ingredients: </h4> &nbsp; {{currentDish[0].ingredients}}
                                </div>

                                <div class="row pb-3">
                                    <h4>Allergens: </h4> &nbsp; {{ currentDish[0].allergens }}
                                </div>

                                <div class="row pb-3">
                                    <h4>Nutritional Facts: </h4> &nbsp; {{ currentDish[0].nutritional_facts }}
                                </div>

                                <div class="row pb-3">
                                    <h4>Dietery Restriction: </h4> <br>
                                    <h5 v-if="currentDish[0].is_halal"> | Halal |</h5> 
                                    <h5 v-if="currentDish[0].is_vegan"> | Vegan |</h5> 
                                    <h5 v-if="currentDish[0].is_glutenfree">| Gluten Free |</h5> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <form @submit.prevent="addToCart(currentDish[0])">
                            <input type="hidden" name="dish_id" v-bind:value="currentDish[0].id">
                            <input type="submit" v-if="currentDish[0].is_available" class="btn btn-primary" value="Add to Cart">
                            <input type="submit" v-else disabled class="btn btn-danger" value="Un-available">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    name: "gallery",
    data() {
        return {
            currentDish: null
        }
    },
    methods: {
        filterDishes(category) {
            let parent = document.querySelector(".dishes");
            console.log(category);
            if(category === "all") {
                parent.childNodes.forEach(function(i) {
                    if(i.classList) {
                        i.style.display = "block";
                    }
                });

            } else {
                parent.childNodes.forEach(function(i) {

                    if(i.classList && !i.classList.contains(category)) {
                        i.style.display = "none";
                    }
                    if(i.classList && i.classList.contains(category)) {
                        i.style.display = "block";
                    }
                });
            }
        },
        loadData(id) {
            this.currentDish = this.allDishes.filter(el => el.id === id);
            //console.log(this.currentDish);
        },
        addToCart(dish) {
            //console.log(dish);
            const get = this.$store.getters.getCartItems.some(el => el.id === dish.id);

            if(!get) {
                this.$store.commit("addToCart", {id: dish.id, name: dish.name, quantity: 1, price: dish.price});
            } else {
                alert("The item is already added to your cart. Please check cart to add / remove quantity.");
            }
        }
    },
    computed: {
        allDishes() {
            return this.$store.getters.dishes;
        }
    },
    mounted() {
        axios.get('/api/dishes')
                .then((res) => {
                    this.$store.commit('retrieveDishes', res.data);
                })
                .catch((err) => {
                    throw err;
                });
    }
}
</script>

<style lang="scss" scoped>

.gallery_container {
    width: 100%;
    margin: 0 auto;
    position: relative;
    top: 180px;
    background-color: rgba(26,26,26,.6);
    max-width: 1630px;

    .gallery_content {
        display: flex;
        flex-direction: row;

        .leftbar {
            width: 30%;
            max-width: 300px;
            background-color: rgba(26,26,26);
            color: #fff;
            padding: 20px;
            box-sizing: border-box;

            h3 {
                text-align: center;
                font-size: 1.7em;
                margin-bottom: 30px;
            }

            ul {
                list-style: none;
                margin: 0;
                padding: 0;

                li {
                    text-align: center;
                    margin-bottom: 30px;
                    display: block;

                    a {
                        padding: 10px;
                        color: rgb(103, 156, 226)
                    }

                    a:active {
                        color: #fff;
                    }
                }
            }
        }

        .dishes {
            padding: 0;
            display: flex;
            flex-wrap: wrap;

            a {
                transition: 2s all ease-in-out;
                
                img {
                    width: 320px;
                    height: 280px;
                }
            }
        }
    }

    .dishes {
        img {
            width: 100%;
        }
    }

    .modal-body {
        img {
            width: 100%;
        }
    }
}

/*body {
    margin: 5px;
}

.gallery_container {
    display: flex;
    flex-direction: row;
    position: absolute;
    bottom: 8%;
    .leftbar {
        background-color: grey;
        padding: 20px;
        ul {
            padding: 0;

            li {
                list-style: none;

            }
        }
    }

    li {
        background-color: honeydew;
        padding: 10px;
    }
}

.container > a {
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 2em;
}

.container > a > img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  box-shadow: 0 2px 16px var(--shadow);
}

.container {
  display: grid;
  grid-gap: 5px;
  grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
  grid-auto-rows: 120px;
  grid-auto-flow: dense;

}

.horizontal {
  grid-column: span 2;
}

.vertical {
  grid-row: span 2;
}

.big {
  grid-column: span 2;
  grid-row: span 2;
}

#dishesModal {
    .modal-body {
        img {
            width: 100%;
        }
    }
}*/
</style>
