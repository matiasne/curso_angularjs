import firebase from 'firebase'

export default{
    created(){
        firebase.auth().onAuthStateChanged((user)=>{
            if (!user) {
                this.$router.push('/login');
            }
        })
    }
}