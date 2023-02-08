<template>

    <form class="com-sec" @submit.prevent="addComment">
        <input type="hidden" name="parent_id" v-model="comment.parent_id">
        <input type="hidden" name="linkable_type" v-model="comment.linkable_type">
        <input type="hidden" name="linkable_id"  v-model="comment.linkable_id">

        <div class="row mb-3">
            <div class="col" v-if="show_name">
                <input type="text" name="name" v-model="comment.name" class="form-control border-0 bg-gray" placeholder="Full Name">
                <form-error v-if="errors.name" :errors="errors">
                    {{ errors.name }}
                </form-error>
            </div>
            <div class="col"  v-else>
                <input type="hidden" name="name" class="form-control" v-model="comment.name">
            </div>
            <div class="col" v-if="show_email">
                <input type="text" name="email" v-model="comment.email" class="form-control border-0 bg-gray" placeholder="Email Address">
                <form-error v-if="errors.email" :errors="errors">
                    {{ errors.email }}
                </form-error>
            </div>
            <div class="col" v-else>
                <input type="hidden" name="email" class="form-control" v-model="comment.email">
            </div>
        </div>
        <textarea class="form-control border-0 bg-gray" rows="1" placeholder="Start writing..." style="resize: none;" v-model="comment.comment"></textarea>
        <form-error v-if="errors.comment" :errors="errors">
            {{ errors.comment }}
        </form-error>
        <button type="submit" class="btn" :disabled="is_disabled">{{btn_name}}</button>
    </form>
</template>

<script>
    export default {
        data(){
            return{
                comment: {
                  "parent_id": this.parent_id,
                  "linkable_type": "App\\Models\\"+this.type,
                  "linkable_id": this.id,
                  "name": "",
                  "email": "",
                  "comment": "",
                },
                submitted: false,
                errors: {},
                show_name: true,
                show_email: true,
                btn_name: 'SUBMIT',
                is_disabled: false,
            }
        },
        created(){ 
        },
        methods: {
            addComment() {
                var self = this;
                self.btn_name = 'Processing...';
                self.is_disabled = true;
                axios
                    .post(baseUrl+'/api/comment/save', this.comment)
                    .then(function(response){
                        self.btn_name = 'SUBMIT';
                        self.is_disabled = false;
                        if(typeof response.data.errors !=='undefined')
                        {
                            self.errors = response.data.errors;
                        }
                        else
                        {
                            if(self.parent_id == 0)
                                self.$emit('new-comment', response.data);
                            else
                            {
                                if(self.comment_level == 2)
                                {
                                    self.$emit('update-comment', response.data);
                                    self.$emit('new-reply', 1);
                                }
                                else
                                    self.$emit('update-comment', response.data);
                            }

                            self.comment.comment = '';
                            
                            var get_cookie_name = self.getCookie("show_name");
                            var get_cookie_email = self.getCookie("show_email");
                            if (get_cookie_name == null){
                                document.cookie = "show_name="+self.comment.name; 
                                self.show_name = false;
                                document.cookie = "show_email="+self.comment.email; 
                                self.show_email = false;
                            }
                            self.errors = {};
                        }
                    })
                    .catch(error => console.log(error))
                    .finally(() => this.loading = false)
            },
            checkCookie(){
                var get_cookie_name = this.getCookie("show_name");
                var get_cookie_email = this.getCookie("show_email");
                if (get_cookie_name != null){
                    this.show_name = false;
                    this.show_email = false;
                    this.comment.name = get_cookie_name;
                    this.comment.email = get_cookie_email;
                } else {
                    this.show_name = true;
                    this.show_email = true;
                }
            },
            getCookie(name) {
                var nameEQ = name + "=";
                var ca = document.cookie.split(';');
                for(var i=0;i < ca.length;i++) {
                    var c = ca[i];
                    while (c.charAt(0)==' ') c = c.substring(1,c.length);
                    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
                }
                return null;
            } 

        },
        watch : {
          parent_id : function () {
            this.comment.parent_id = this.parent_id;
          }
        },
        mounted() {
            this.checkCookie();
        },
        props: ['id', 'type', 'parent_id', 'comment_level']
    }
</script>