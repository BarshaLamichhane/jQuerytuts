<template>
    <div>
        <div class="container">
            <div class="container container-fluid">
                <div class="row">
                    <div class="jumbotron">
                         <form method="post" action="#" enctype="multipart/form-data" >
                            <div class="form-row">
                                <div class="form-group col-sm-12  col-md-12 col-lg-12">
                                    <label ><b>New password:</b></label>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text glyphicon glyphicon-lock"></div>
                                        <input type="password" class="form-control"  placeholder="New password" v-model="formelement.confirmedpassword">
                                    </div>
                                </div>
                                <div class="form-group col-sm-12 col-md-12 col-lg-12">
                                    <label ><b>Confirm Password:</b></label>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text glyphicon glyphicon-lock"></div>
                                        <input type="password" class="form-control"  placeholder="Re-enter password" v-model="formelement.confirmedpassword">
                                    </div>   
                                </div>
                                <div class="form-group col-sm-2  col-md-2  col-lg-2 "> 
                                    <button type="button" class="form-control btn btn-success" v-on:click="submitpost()" >Submit</button>
                                </div>
                                <div class="form-group col-sm-2  col-md-2  col-lg-2 "> 
                                    <button type="button" class="form-control btn btn-info" v-on:click="cancelpost()" >Cancel</button>
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
          formelement:{
              newpassword:'',
              confirmedpassword:''
          }
      }
  },
  methods:{
      submitpost(){
          console.log("success");
          alert ("password reset successfully");
      },
      cancelpost(){
          console.log("cancelled");
          this.$router.push("/login");
      }
  }
 
}
</script>
