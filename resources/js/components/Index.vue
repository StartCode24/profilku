<template>
<div class="card">
    <div class="card">
        <div class="card-header">
            <router-link to="/create" class="btn btn-info float-right">Create New Post</router-link>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" width="100">#</th>
                        <th scope="col" width="100">Title</th>
                        <th scope="col" width="100">Description</th>
                        <th scope="col" width="20">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="post,index in posts">
                        <td>{{post.title}}</td>
                        <td>{{post.description}}</td>
                        <td>
                            <router-link :to="{name:'readPost',params:{id:post.id}}" class="btn btn-primary"><i class="fa fa-eye"></i>View</router-link>|
                            <router-link :to="{name:'editPost',params:{id:post.id}}" class="btn btn-warning"><i class="fa fa-pencil"></i>Edit</router-link>|
                            <button class="btn btn-danger" v-on:click="submitPostDelet(post.id,index)" type="button">Delet</button>
                        </td>
                    </tr>

                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            posts: [],
            errors: []
        }
    },
    created() {
        axios.get('/posts')
            .then(response => {

                this.posts = response.data
            })
            .catch(e => {
                this.errors.push(e)
            })

    },
    methods: {
        submitPostDelet(id, index) {
            if (confirm("click 'Ok' to Delete.")) {
                axios.delete(`/posts/` + id)
                    .then(response => {
                        console.log(response)
                        this.posts.splice(index, 1);
                    })
                    .catch(e => {
                        this.errors.push(e)
                    })
            }

        }
    }
}
</script>
