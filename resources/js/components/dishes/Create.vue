<template>
    <div class="container">
        <div class="card create-dish text-white mb-3">
            <div class="form-label-group error_block" v-if="reqMsg">
                  <div class="alert alert-dismissible fade show" :class="reqMsg.status ? 'alert-success': 'alert-danger'" role="alert">
                    <strong> {{ reqMsg.message }} </strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
            </div>

            <div class="card-header text-white"><h3>Create a New Dish</h3></div>
            <div class="card-body">
                <form id="createDish_Form" @submit.prevent="createDish()">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="category_id">Category</label>
                            <select name="category_id" id="category_id" class="form-control" required>
                                <option v-for="cat in allCategories" :key="cat.id" :value="cat.id">{{cat.category_name}}</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="image">Image Path</label>
                            <input type="text" name="image" class="form-control" id="image" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="description">Description</label>
                            <input type="text" id="description" name="description" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="ingredients">Ingredients</label>
                            <input type="text" id="ingredients" name="ingredients" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="allergens">Allergens</label>
                            <input type="text" id="allergens" name="allergens" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nutritional_facts">Nutritional Facts</label>
                            <input type="text" id="nutritional_facts" name="nutritional_facts" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="is_halal">Halal</label>
                            <select id="is_halal" class="form-control" name="is_halal" required>
                                <option value="1">Yes</option>
                                <option value="0" selected>No</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="is_vegan">Vegan</label>
                            <select id="is_vegan" class="form-control" name="is_vegan" required>
                                <option value="1">Yes</option>
                                <option value="0" selected>No</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="is_glutenfree">Glutenfree</label>
                            <select id="is_glutenfree" class="form-control" name="is_glutenfree" required>
                                <option value="1">Yes</option>
                                <option value="0" selected>No</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" name="price" id="price" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "dishes-create",
    data() {
        return {
            reqMsg: null
        }
    },
    computed: {
        allCategories() {
            return this.$store.getters.getCategories;
        }
    },
    methods: {
        createDish() {
            let post_data = {
                category_id: document.getElementById("category_id").value,
                name: document.getElementById("name").value,
                image: document.getElementById("image").value,
                description: document.getElementById("description").value,
                ingredients: document.getElementById("ingredients").value,
                allergens: document.getElementById("allergens").value,
                nutritional_facts: document.getElementById("nutritional_facts").value,
                is_halal: parseInt(document.getElementById("is_halal").value),
                is_vegan: parseInt(document.getElementById("is_vegan").value),
                is_glutenfree: parseInt(document.getElementById("is_glutenfree").value),
                price: parseInt(document.getElementById("price").value)
            };

            axios.post(`/api/dishes/create`, post_data)
                .then(res => {
                    this.reqMsg = res.data;

                    setTimeout(() => {
                        this.reqMsg = null;

                        document.getElementById("createDish_Form").reset();
                    }, 3000);
                })
                .catch(err => {
                    throw err;
                })
        }
    },
    mounted() {
        axios.get(`/api/dishes/category`)
                .then(res => {
                    console.log(res.data);
                    this.$store.commit("retrieveCategories", res.data);
                })
                .catch(err => {
                    console.log(err);
                });
    }
}
</script>

<style lang="scss" scoped>
.create-dish {
    background-color: rgba(26,26,26,0.9);
    top: 200px;
    padding: 20px;
}
</style>