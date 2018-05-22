<template>
    <div>
        <div class="container">
            <div class="container container-fluid">
                <div class="row">
                    <div class="jumbotron">
                        <p>please enter the reset pin that you obtained from your email-account. After that you will be able to reset your password</p>
                         <form method="post" action="#" enctype="multipart/form-data" >
                            <div class="form-row">
                                 <div class="form-group col-sm-12 col-md-12 col-lg-12">
                                    <label ><b>Verifcation-code:</b></label>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text glyphicon glyphicon-lock"></div>
                                        <input type="text" class="form-control"  placeholder="Enter your verification code" v-model="code">
                                    </div>   
                                </div>



                                <div class="form-group  col-sm-2  col-md-2 col-lg-2"> 
                                    <button type="button" class="form-control btn btn-success" v-on:click="submitemail()" >Submit</button>
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
         code:''
      }
  },
  methods:{
      submitemail(){
          console.log("success");
          this.$router.push("/changepassword")
      },
  }
 
}
</script>
