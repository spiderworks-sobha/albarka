<template>
    <div class="container" style="max-width: 800px;">
         <div class="d-flex align-items-center justify-content-center comments-cnts ">
            <div class="container">
               <div class="row justify-content-center" v-show="comment_count>0">
                  <div class="col-lg-12">
                     <h5>{{comment_count}} Comments</h5>
                  </div>
               </div>
               <div class="row justify-content-center mb-4">
                  <div class="col-lg-12">
                     <div class="comments">
                        <comment-item v-for="(comment, index) in comments" :key="index" :comment="comment" :id="id" :type="type" ></comment-item>
                     </div>
                  </div>
               </div>
               <div v-if="pagination" class="text-center"><a v-on:click="loadmore()" class="btn btn-secondary">Load More</a></div>
               <hr class="mt-2 mb-2" />
               <div class="row justify-content-center">
                  <div class="col-lg-12">
                     <div class="comment-form d-flex align-items-center">
                        <div class="flex-grow-1 ms-2 ms-sm-3">
                           <h5>Write a review</h5>
                           <comment-form :id="id" :type="type" parent_id="0" comment_level="0" @new-comment="updateComment"></comment-form>
                        </div>
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
            return{
                comments: {},
                pagination: false,
                comment_count: 0,
                page: 1,
            }
        },
        created(){
            this.fetchComments()
        },
        methods: {
            fetchComments() {
                var that = this;
                let url = baseUrl+'/api/comment/list/'+this.id+'/'+this.type+'?page='+this.page;
                axios.get(url)
                    .then(res =>{
                        that.comment_count = res.data.total;
                        if(that.page == 1)
                            that.comments = res.data.data;
                        else{
                            for (var i =  0; i != res.data.data.length; i++) {
                                that.comments.push(res.data.data[i]);
                            }
                        }
                        that.page = res.data.current_page+1;
                        if(res.data.current_page == res.data.last_page)
                            that.pagination = false;
                        else
                            that.pagination = true;
                        
                    });

                },
            updateComment(items)
            {
                this.page = 1;
                this.comments = {};
                this.fetchComments();
            },
            loadmore()
            {
                this.fetchComments();
            }
        },
        mounted() {
        },
        props: ['id', 'type']
    }
</script>