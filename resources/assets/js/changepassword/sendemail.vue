<template>
    <div>
        <div class="container">
            <div class="container container-fluid">
                <div class="row">
                    <div class="jumbotron">
                        <p>You will be sent your password reset pin in your gmail account that you provided. Please enter your g-mail.</p>
                         <form method="post" action="#" enctype="multipart/form-data" >
                            <div class="form-row">
                                <div class="form-group col-sm-12  col-md-12 col-lg-12">
                                    <label ><b>Email:</b></label>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text glyphicon glyphicon-envelope"></div>
                                        <input type="email" class="form-control"  placeholder="Enter your  valid email" v-model="emailelement.email">
                                        <div class="input-group-text">@gmail.com</div>
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
          emailelement:{
              email:'',
          }
      }
  },
  methods:{
      submitemail(){
          console.log("success");
          this.$router.push("/verifycode")
      },
  }
 
}
</script>
