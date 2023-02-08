<template>
  <div>
    <div class="reply d-flex">
        <div class="flex-shrink-0">
            <div class="avatar avatar-sm rounded-circle">
                <avatar :name="item.name"></avatar>
            </div>
        </div>
        <div class="flex-grow-1 ms-2 ms-sm-3">
            <div class="reply-meta d-flex align-items-baseline">
                <h6 class="mb-0 me-2 mr-2">{{item.name}}</h6>
                <time-ago :created_at="item.created_at"></time-ago>
            </div>
            <div class="reply-body">
              <a v-if="item.status == 0" class="not-active float-left" title="Your comment is not verified by the administrator.">!</a><div class="float-left" v-html="item.comment"></div>
            </div>
            <div class="comment-rep">
                <a href="javascript:void(0)" v-on:click="updateReplyParant(item.id)"
                                    ><i class="fas fa-reply fa-xs"></i
                                    ><span class="small"> reply</span></a
                                  >
            </div>
        </div>
    </div>
    <div class="rep-frm-cntr" v-show="show_form">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="comment-form d-flex align-items-center">
                    <div class="flex-grow-1 ms-2 ms-sm-3">
                        <h5>Write a review</h5>
                        <comment-form  v-on="$listeners" :id="id" :type="type" v-bind:parent_id="parent_id" comment_level="2"  :key="item.id" @new-reply="updateReply"></comment-form>
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
              "parent_id" : 0,
              "show_form" : false,
              "item" : this.comment,
            }
        },
        created(){
        },
        methods: {
          updateReplyParant(id)
          {
            this.parent_id = id;
            this.show_form = (this.show_form)?false:true;
          },
          updateReply(items)
          {
            this.show_form = false;
          }
        },
        mounted() {
        },
        props: ['comment', 'id', 'type']
    }
</script>