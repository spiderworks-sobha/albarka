<template>
	<span class="name-cntr">{{avatar}}</span>
</template>

<script>
    export default {
        data(){
        	return{
              "avatar" : '',
            }
        },
        created(){
        },
        methods: {
          	get_avatar() 
			{
			 	var str = this.name;
				var matches = str.match(/\b(\w)/g); // ['J','S','O','N']
				var acronym = matches.join('');
				return acronym;
			}
        },
        mounted() {
        	this.avatar = this.get_avatar();
        },
        props: ['name']
    }
</script>