<template>
    <div class="users_list">
        <h5 class="card-title text-white">Total Users: {{users.length}}</h5>
                
        <table class="table table-striped bg-light text-center">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="user in users" :key="user.id">
                    <th scope="row">{{ user.id }}</th>
                    <td>{{ user.name }}</td>
                    <td>{{ user.email }}</td>
                    <td>{{ user.roles.name }}</td>
                    <td>
                        <button data-toggle="modal" @click="loadData(user.id)" data-target="#editUserModal" class="btn btn-primary text-white">Edit</button>
                        <button v-if="currentUserId !== user.id" @click="deleteUser(user.id)" class="btn btn-danger text-white">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- Modal -->
        <div v-if="this.user" class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="editUserModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editUserModalTitle">Edit User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form @submit.prevent="updateUser(user.id)">
                            <div class="form-group">
                                <label for="user_name">Name</label>
                                <input type="text" :value="this.user.name" class="form-control" id="user_name" required>
                            </div>
                            <div class="form-group">
                                <label for="user_email">Email address</label>
                                <input type="email" :value="this.user.email" class="form-control" id="user_email" required>
                            </div>
                            <div class="form-group">
                                <label for="user_pass">Password</label>
                                <input type="password" class="form-control" id="user_pass">
                            </div>
                            <div class="form-group">
                                <label for="user_role">Role</label>
                                <select id="user_role" class="form-control">
                                    <option value="1" :selected="user.role === 1">Admin</option>
                                    <option value="3" :selected="user.role === 3">User</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "users-list",
    data() {
        return {
            user: null,
            newName: null,
            newEmail: null,
            newPassword: null,
            newRole: null
        }
    },
    computed: {
        users() {
            return this.$store.getters.getUsersList;
        },
        currentUserId() {
            return this.$store.getters.currentUser.id;
        }
    },
    methods: {
        loadData(id) {
            this.user = this.users.filter((el) => el.id === id)[0];
            console.log(this.user);
        },
        updateUser(id) {
            let post_data = {
                id: id,
                user_name: document.getElementById("user_name").value,
                user_email: document.getElementById("user_email").value,
                user_pass: document.getElementById("user_pass").value == "" ? null : document.getElementById("user_pass").value,
                user_role: document.getElementById("user_role").value
            }

            //console.log(post_data);
            axios.post(`/api/users/${id}`, post_data)
                .then(response => {
                    console.log(response);
                    this.$store.commit("resetState");
                    window.location.reload();
                })
                .catch(err => {
                    throw err;
                });
            
        },
        deleteUser(id) {
            axios.post(`/api/users/${id}/delete`, {id: id})
                .then(res => {
                    console.log(res);
                    window.location.reload();
                })
                .catch(err => {
                    throw err;
                });
        }
    }
}
</script>

<style>

</style>