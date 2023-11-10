<template>
    <div>
        <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Create a new project</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form  v-on:submit.prevent="onSubmit">

                            <div class=" row">
                                <div class="form-group col-4">
                                    <input type="text" required v-model="title" name="title" class="form-control input-default " placeholder="Project Title">
                                </div>
                                 <div class="form-group col-4">
                                         <b-form-select
                                                v-model="industry_id"
                                                :options="industries"
                                                class="mb-3"
                                                value-field="id"
                                                text-field="name"
                                                disabled-field="notEnabled"
                                                ></b-form-select>


                                </div>
                                <div class="form-group col-4">
                                    <div class="input-group">

                                               <b-form-file
                                                v-model="thumbnail"
                                                required
                                                :state="Boolean(thumbnail)"
                                                placeholder="Choose a file or drop it here..."
                                                drop-placeholder="Drop file here..."
                                                ></b-form-file>



                                    </div>
                                </div>

                                <div class="form-group col-12">
                                  <vue-editor required v-model="content" />

                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</template>

<script>
export default {
    data(){
        return {
            content:"",
            title:"",
            thumbnail:null,
            industries:{},
            industry_id:""
        };
    },
    methods: {

        getIndustries(){
            axios.get('/dashboard/industries').then((res)=>{
                console.log("industries",res.data);
                this.industries=res.data.industries;

            })
        },

        onSubmit(){

             Vue.$toast.default("please wait data is processing...",{duration:800});
             let formdata = new FormData();
             formdata.append("title",this.title);
             formdata.append("thumbnail",this.thumbnail);
             formdata.append("industry_id",this.industry_id);
             formdata.append("content",this.content);

                axios.post("/dashboard/project/store",formdata).then((res)=>{

                    setTimeout(() => {
                          Vue.$toast.success("New Project has been created",{duration:1500});
                    }, 1500);
                   window.location.href="/dashboard/projects";
                });
        }
    },
    mounted(){
        this.getIndustries();
    }
}
</script>

<style>

</style>
