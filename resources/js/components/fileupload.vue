<template>

    <form @submit.prevent="submit" class="row py-4">
        <div class="col-lg-6 mx-auto">

            <!-- Upload image input-->
            <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                <input id="upload" type="file" @change="onChange" class="form-control border-0">
                <label id="upload-label" for="upload" class="font-weight-light text-muted">Choose file</label>
                <div class="input-group-append">
                    <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> <i class="fa fa-cloud-upload mr-2 text-muted"></i><small class="text-uppercase font-weight-bold text-muted">Choose file</small></label>
                </div>
            </div>

            <!-- Uploaded image area-->
            <p class="font-italic text-white text-center">The image uploaded will be rendered inside the box below.</p>
            <div class="image-area mt-4"><img id="imageResult" src="" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>
       <center > <input  type="submit" class="btn btn-primary w-25 mt-5"/>
       <input  type="button" value="Download" @click="download" class="btn btn-success w-25 mt-5"/>
               </center>


        </div>
    </form>
</template>

<script>
import axios from "axios";
    export default {
        data:()=>({
            image:null,
        }),
        methods:{
            onChange(e){
                this.image = e.target.files[0]
                console.log('selected file:', this.image)
            },
            submit(){
               
    let data = new FormData();
    data.append('file', document.getElementById('upload').files[0]);

    axios.post('/api/api/upload',data).then(function (response) {
        console.log(response.data);
    
            })
        },
        download(){
         axios({
            url:'/image/'+this.image.name,
            method:'GET',
            responseType:'blob'
         }).then((response)=>{
            var fileUrl = window.URL.createObjectURL(new Blob([response.data]))
            var fileLink = document.createElement('a')
            fileLink.href = fileUrl
            fileLink.setAttribute('download', this.image.name)
            document.body.appendChild(fileLink)
            fileLink.click()
         })
        }
    }
    }
</script>
