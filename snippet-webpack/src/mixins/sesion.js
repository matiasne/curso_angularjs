export default{
    created(){
        const token = JSON.parse(this.$localStorage.get('token'));
        if(!token){
            this.$router.push('/');
        }
    }
}