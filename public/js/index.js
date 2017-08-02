var vm = new Vue({
	el:"#app",
	data:{
		title:"hello Vue 1654"
	},
	mounted:function(){
		this.ready();
	},
	methods:{
		ready:function(){
			this.title="cmcc"
		}
	}
});
Vue.filters();