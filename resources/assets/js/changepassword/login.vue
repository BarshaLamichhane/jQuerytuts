<template>
    <div>
        <div class="container">
            <div class="container container-fluid">
                <div class="row">
                    <div class="jumbotron">
                         <form method="post" action="#" enctype="multipart/form-data" >
                            <div class="form-row">
                                <div class="form-group col-sm-12  col-md-12 col-lg-12">
                                    <label ><b>Email:</b></label>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text glyphicon glyphicon-envelope"></div>
                                        <input type="email" class="form-control"  placeholder="Enter your  valid email" v-model="login.email">
                                        <div class="input-group-text">@gmail.com</div>
                                    </div>
                                </div>
                                <div class="form-group col-sm-12 col-md-12 col-lg-12">
                                    <label ><b>Confirm Password:</b></label>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text glyphicon glyphicon-lock"></div>
                                        <input type="password" class="form-control"  placeholder="Enter your password" v-model="login.password">
                                    </div>   
                                </div>
                                <div class="form-group   col-sm-2  col-md-2 col-lg-2"> 
                                    <button type="button" class="form-control btn btn-success" v-on:click="submitpost()" >Submit</button>
                                </div>
                                <div class="form-group  col-sm-2 offset-sm-2  col-md-2 offset-md-2 col-lg-2 offset-lg-2"> 
                                    <button type="button" class="form-control btn btn-link" v-on:click="forgotpassword()" >forgot password?</button>
                                </div>
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
  data(){
      return{
          login:{
              email:'',
              password:''
          }
      }
  },
  methods:{
      submitpost(){
          console.log("success");
          this.$router.push("/")
      },
      forgotpassword(){
          console.log("forgot");
          this.$router.push("/sendemail");
      }
  }
 
}
</script>
