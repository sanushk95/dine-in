<template>
    <div class="row justify-content-center">
        <div class="col-md-6 mt-4">
            <div class="card card-default">
                <div class="card-header">Dine In</div>
                
                <div class="card-body">
                    <h2>Cart</h2>
                    <div class="card" v-for="item in cartItems" v-bind:key="item.id">
                        <div class="card-body">
                            <h5 class="card-title">{{item.name}}</h5>
                            <p class="card-text"><span class="font-weight-bold">Price:</span> ${{(item.price * item.quantity) / 100}}</p>
                            <p class="card-text"><span class="font-weight-bold">Quantity:</span> {{item.quantity}} <button @click="incrementQuantity(item.id)">+</button> <button @click="decrementQuantity(item.id)">-</button></p>
                            <p class="card-text"><button class="btn btn-danger" @click="removeItem(item.id)">Remove</button></p>
                        </div>
                    </div>
                    <br>
                    <h3>Total: ${{calculateTotal.toFixed(2)}}</h3>
                    
                </div>
            </div>
        </div>
        
    </div>
</template>

<script>
export default {
    name: "cart",
    computed: {
        cartItems() {
            return this.$store.getters.getCartItems;
        },
        calculateTotal() {
            let totalPrice = 0.0;

            this.cartItems.forEach(item => {
                totalPrice = totalPrice + ((item.price * item.quantity)/100);
                
            });

            return totalPrice + totalPrice*(13/100);
        }
    },
    methods: {
        removeItem(id) {
            this.$store.commit("removeFromCart", id);
        },
        incrementQuantity(id) {
            this.$store.commit("incrementQuantity", id);
        },
        decrementQuantity(id) {
            this.$store.commit("decrementQuantity", id);
        }
    }
}
</script>

<style>

</style>