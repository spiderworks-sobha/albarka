<template>
	<span class="text-muted">{{time_ago}}</span>
</template>

<script>
    export default {
        data(){
        	return{
              "time_ago" : '',
            }
        },
        created(){
        },
        methods: {
          	diff_hours(dt2, dt1) 
			{
			 	var diff =(dt2.getTime() - dt1.getTime()) / 1000;
			  	diff /= 60;
			  	var mins = Math.abs(Math.round(diff));
			  	var hrs = Math.floor(mins/60);
			  	var days = Math.floor(mins/1440);
			  	if(mins <=0)
			  		return "Just Now";
			  	else if(mins <60)
			  	{
			  		if(mins == 1)
			  			return "1 minute ago";
			  		else
			  			return mins+" minutes ago";
			  	}
			  	else if(hrs>=1 && hrs<24)
			  	{
			  		if(hrs == 1)
			  			return "1 hour ago";
			  		else
			  			return hrs+" hours ago";
			  	}
			  	else if(days>=1 && days<31)
			  	{
			  		if(days == 1)
			  			return "1 day ago";
			  		else
			  			return days+" days ago";
			  	}
			  	else{
			  		var d = dt1.getDate();
				    var m = dt1.getMonth() + 1; //Month from 0 to 11
				    var y = dt1.getFullYear();
				    return '' + y + '-' + (m<=9 ? '0' + m : m) + '-' + (d <= 9 ? '0' + d : d);

			  	}
			}
        },
        mounted() {
        	var date2 = new Date();
        	var date1 = new Date(this.created_at);
        	this.time_ago = this.diff_hours(date2, date1);
        },
        props: ['created_at']
    }
</script>