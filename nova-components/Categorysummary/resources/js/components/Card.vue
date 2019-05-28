<template>
 
    <card class="flex flex-col items-center justify-center"   >
        <h1 v-if="catsel_refresh == 1">Please wait.. refreshing page</h1>
        <div class="px-3 py-3" v-if="catsel_status < 1">
            <h1 class="text-center text-3xl text-80 font-light">Define Categories</h1><br>

            <h4  class="font-light">AskPls supports a number of categories based on your profession. Please select from below list to define your profession category</h4>

            <br><br>

 
            <div> 

                <table  class="table w-full">
                    <thead>
                        <tr>
                            <th class="text-left">Category</th>
                            <th class="text-left">Name</th>
                            <th class="text-left">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> Company</td>
                            <td><input v-model="inCompany" style="border:2px thick blue;" class="form-control form-control-sm" type="text" placeholder="Enter Company Name"> </td> 
                            <td><button @click="selCompany" type="button" class="btn btn-default btn-primary">Select</button> </td>
                        </tr>   
                        <tr>
                            <td> Doctor</td>
                            <td><input v-model="inDoctor" style="border:2px thick blue;" class="form-control form-control-sm" type="text" placeholder="Enter Doctor Name"> </td> 
                            <td><button @click="selDoctor" type="button" class="btn btn-default btn-primary">Select</button> </td>
                        </tr>
                        <tr>
                            <td> School</td>
                            <td><input v-model="inSchool" style="border:2px thick blue;" class="form-control form-control-sm" type="text" placeholder="Enter School Name"> </td> 
                            <td><button @click="selSchool" type="button" class="btn btn-default btn-primary">Select</button> </td>
                        </tr>
                        <tr>
                            <td> College</td>
                            <td><input v-model="inCollege" style="border:2px thick blue;" class="form-control form-control-sm" type="text" placeholder="Enter College Name"> </td> 
                            <td><button @click="selCollege" type="button" class="btn btn-default btn-primary">Select</button> </td>
                        </tr>
                        <tr>
                            <td> Hotel</td>
                            <td><input v-model="inHotel" style="border:2px thick blue;" class="form-control form-control-sm" type="text" placeholder="Enter Hotel Name"> </td> 
                            <td><button @click="selHotel" type="button" class="btn btn-default btn-primary">Select</button> </td>
                        </tr>
                        <tr>
                            <td> Restaurant</td>
                            <td><input v-model="inRestaurant" style="border:2px thick blue;" class="form-control form-control-sm" type="text" placeholder="Enter Restaurant Name"> </td> 
                            <td><button @click="selRestaurant" type="button" class="btn btn-default btn-primary">Select</button> </td>
                        </tr>
                        <tr>
                            <td> Lawyer</td>
                            <td><input v-model="inLawyer" style="border:2px thick blue;" class="form-control form-control-sm" type="text" placeholder="Enter Lawyer Name"> </td> 
                            <td><button @click="selLawyer" type="button" class="btn btn-default btn-primary">Select</button> </td>
                        </tr>
                        <tr>
                            <td> Fitness Centers</td>
                            <td><input v-model="inFitness" style="border:2px thick blue;" class="form-control form-control-sm" type="text" placeholder="Enter Fitness Center Name"> </td> 
                            <td><button @click="selFitness" type="button" class="btn btn-default btn-primary">Select</button> </td>
                        </tr>
                    </tbody>
                </table>
                                    

            </div> 
 
      
            
        </div>
    </card>
</template>

<script>
 

export default {
    props: [
        'card',    
    ],
    data: () => {
            return {

                id:"", 
                inpId: "", 
                topic: "",
                topics: [],
                inCompany: "",
                inDoctor: "",
                inSchool: "",
                inCollege: "",
                inHotel: "",
                inRestaurant: "",
                inLawyer: "",
                inFitness: "",
                catsel_status: -1,
                catsel_refresh: -1,
                
                } 
            },

    mounted() {
        axios.get('/categorysummary/get' )
                    .then(response => {
    
                        this.catsel_status = response.data; 

                    });
    },
    methods: {  
        selCompany:function(){  

            if( this.inCompany  == ''){

                alert('Please enter the company name');

            }else{

                var c = confirm("Sure to Submit with this setting? You will not be able to change it later !!");

                if( c == true){

                    axios.get('/categorysummary/post' ,{
                        params: {

                            type : 'company', 
                            name : this.inCompany,

                            }

                        })
                        .then(response => {
        
                            this.catsel_status = 1;

                            this.catsel_refresh = 1;

                            this.$router.go(this.$router.currentRoute);

                        });

                }

            }

        },selDoctor:function(){ 
             
            var c = confirm("Sure to Submit with this setting? You will not be able to change it later !!");

                if( c == true){


                    axios.get('/categorysummary/post' ,{
                                    params: {

                                        type : 'doctor', 
                                        name : this.inDoctor,

                                        }

                                    })
                        .then(response => {
        
                            this.catsel_status = 1;

                            this.catsel_refresh = 1;

                            this.$router.go(this.$router.currentRoute);

                        });

                }
        },selSchool:function(){ 
            
            if( this.inSchool  == ''){

                alert('Please enter the school name');

            }else{

                var c = confirm("Sure to Submit with this setting? You will not be able to change it later !!");

                if( c == true){

                    axios.get('/categorysummary/post' ,{
                                    params: {

                                        type : 'school', 
                                        name : this.inSchool,

                                        }

                                    })
                        .then(response => {
        
                            this.catsel_status = 1;

                            this.catsel_refresh = 1;

                            this.$router.go(this.$router.currentRoute);

                        });

                }

            }
            
        },selCollege:function(){ 
            
            if( this.inCollege  == ''){

                alert('Please enter the college name');

            }else{

                var c = confirm("Sure to Submit with this setting? You will not be able to change it later !!");

                if( c == true){

                    axios.get('/categorysummary/post' ,{
                                    params: {

                                        type : 'college', 
                                        name : this.inCollege,

                                        }

                                    })
                        .then(response => {
        
                            this.catsel_status = 1;

                            this.catsel_refresh = 1;

                            this.$router.go(this.$router.currentRoute);

                        });
                }

            }
        },selHotel:function(){ 
            
            if( this.inHotel  == ''){

                alert('Please enter the hotel name');

            }else{

                var c = confirm("Sure to Submit with this setting? You will not be able to change it later !!");

                if( c == true){

                    axios.get('/categorysummary/post' ,{
                                        params: {

                                            type : 'hotel', 
                                            name : this.inHotel,

                                            }

                                        })
                            .then(response => {
            
                                this.catsel_status = 1;

                                this.catsel_refresh = 1;

                                this.$router.go(this.$router.currentRoute);

                            });
                }
            }
        },selRestaurant:function(){ 
            
            if( this.inRestaurant  == ''){

                alert('Please enter the restaurant name');

            }else{

                var c = confirm("Sure to Submit with this setting? You will not be able to change it later !!");

                if( c == true){

                    axios.get('/categorysummary/post' ,{
                                    params: {

                                        type : 'restaurant', 
                                        name : this.inRestaurant,

                                        }

                                    })
                        .then(response => {
        
                            this.catsel_status = 1;

                            this.catsel_refresh = 1;

                            this.$router.go(this.$router.currentRoute);

                        });
                }

            }
        },selLawyer:function(){ 
             
            var c = confirm("Sure to Submit with this setting? You will not be able to change it later !!");

                if( c == true){

                    axios.get('/categorysummary/post' ,{
                                params: {

                                    type : 'lawyer', 
                                    name : this.inLawyer,

                                    }

                                })
                    .then(response => {
    
                        this.catsel_status = 1;

                        this.catsel_refresh = 1;

                        this.$router.go(this.$router.currentRoute);

                    });

                }
        },selFitness:function(){ 
            
            if( this.inFitness  == ''){

                alert('Please enter the Fitness center name');

            }else{

                var c = confirm("Sure to Submit with this setting? You will not be able to change it later !!");

                if( c == true){

                    axios.get('/categorysummary/post' ,{
                                    params: {

                                        type : 'fitness', 
                                        name : this.inFitness,

                                        }

                                    })
                        .then(response => {
        
                            this.catsel_status = 1;

                            this.catsel_refresh = 1;

                            this.$router.go(this.$router.currentRoute);

                        });

                }

            }
        },
    }
}
</script>
