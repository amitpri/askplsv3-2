<template>
    <card class="flex flex-col items-center justify-center">
        <div class="px-3 py-3">
            <h1 class="text-center text-3xl text-80 font-light">Define Categories</h1><br>

            <h4 v-if="topics.length < 1"  class="font-light">AskPls supports a number of categories based on your profession. Please select from below list to define your profession category</h4>

            <br><br>

 
            <div > 

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

            <div v-if="topics.length > 0" >
                <div >

                    <a href="/portal/work" class="btn btn-default btn-primary">New Workspace</a> </br> 
 
                    <table  class="table w-full">
                        <thead>
                            <tr>
                                <th class="text-left">Workspace</th>
                                <th class="text-left">URL</th>
                                <th class="text-left">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="topic in topics" >
                                <td>{{ topic.workspace }}</td>
                                <td>{{ topic.url }}</td> 
                                <td><a class="btn btn-default btn-primary" href="/join">Use</a></td>
                            </tr>
                        </tbody>
                    </table>
                                        

                </div>

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
                
                } 
            },

    mounted() {
        axios.get('/categorysummary/get' )
                    .then(response => {
    
                        this.topics = response.data; 

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
        
                            alert('done');

                        });

                }

            }

            
        },selDoctor:function(){ 
             
            axios.get('/categorysummary/post' ,{
                                params: {

                                    type : 'doctor', 
                                    name : this.inDoctor,

                                    }

                                })
                    .then(response => {
    
                        alert('done');

                    });
        },selSchool:function(){ 
            
            if( this.inSchool  == ''){

                alert('Please enter the school name');

            }else{

                axios.get('/categorysummary/post' ,{
                                params: {

                                    type : 'school', 
                                    name : this.inSchool,

                                    }

                                })
                    .then(response => {
    
                        alert('done');

                    });

            }

            
        },selCollege:function(){ 
            
            if( this.inCollege  == ''){

                alert('Please enter the college name');

            }else{

                axios.get('/categorysummary/post' ,{
                                    params: {

                                        type : 'college', 
                                        name : this.inCollege,

                                        }

                                    })
                        .then(response => {
        
                            alert('done');

                        });

            }
        },selHotel:function(){ 
            
            if( this.inHotel  == ''){

                alert('Please enter the hotel name');

            }else{

                axios.get('/categorysummary/post' ,{
                                    params: {

                                        type : 'hotel', 
                                        name : this.inHotel,

                                        }

                                    })
                        .then(response => {
        
                            alert('done');

                        });
            }
        },selRestaurant:function(){ 
            
            if( this.inRestaurant  == ''){

                alert('Please enter the restaurant name');

            }else{

                axios.get('/categorysummary/post' ,{
                                    params: {

                                        type : 'restaurant', 
                                        name : this.inRestaurant,

                                        }

                                    })
                        .then(response => {
        
                            alert('done');

                        });

            }
        },selLawyer:function(){ 
             
            axios.get('/categorysummary/post' ,{
                                params: {

                                    type : 'lawyer', 
                                    name : this.inLawyer,

                                    }

                                })
                    .then(response => {
    
                        alert('done');

                    });
        },selFitness:function(){ 
            
            if( this.inFitness  == ''){

                alert('Please enter the Fitness center name');

            }else{

                axios.get('/categorysummary/post' ,{
                                    params: {

                                        type : 'fitness', 
                                        name : this.inFitness,

                                        }

                                    })
                        .then(response => {
        
                            alert('done');

                        });

            }
        },
    }
}
</script>
