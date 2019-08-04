<template>
<div class="card">
    <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
    </div>

    <div class="card-body">
        <form v-on:submit="submitPost()">

            <h3 class="text-center">Sign up with your email</h3>
            <div class="form-group row">
                <div class="col-md-12">
                    <input id="email" type="email" placeholder="Enter Your Email Addres" class="form-control text-center " v-model="email" value="" required="required" autocomplete="email">

                </div>
            </div>
            <p class="text-center">We will not share or display your email address.</p>

            <div class="form-group row">
                <div class="col-md-12">
                    <button class="btn btn-primary btn-block">
                        Next
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
</template>
<script>


export default {
  data() {
    return {
      email:""
    };
  },
  methods: {
    submitPost(){
          this.errors = {};
      axios.post('/register/emailStore', this.email).then(response => {
        alert('Message sent!');
      }).catch(error => {
        if (error.response.status === 422) {
          this.errors = error.response.data.errors || {};
        }
      });
    }
  }
}
</script>
