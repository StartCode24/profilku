<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create New Post</div>

                    <div class="card-body">
                        <form v-on:submit="submitPost()">
                            <div class="form-group">
                                <label for="my-input">Title</label>
                                <input  class="form-control" type="text" v-model="posts.title" placeholder="Title">
                            </div>
                            <div class="form-group">
                                <label for="my-textarea">Descripion</label>
                                <textarea  class="form-control" v-model="posts.description" rows="3" placeholder="Description"></textarea>
                            </div>
                            <div class="form-group">
                                <router-link to="/" class="btn btn-warning">Cancel</router-link>
                                <button class="btn btn-primary" >Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>


export default {
  data:function() {
    return {
      posts: {
          title:"",
          description:"",
      },
      errors: []
    }
  },
  methods: {
    submitPost(){
    axios.post(`/posts`,this.posts)
    .then(response => {
      console.log(response)  
      this.$router.push({path:'/'})
      this.posts = response.data
    })
    .catch(e => {
      this.errors.push(e)
    })
    }
  }
}
</script>
