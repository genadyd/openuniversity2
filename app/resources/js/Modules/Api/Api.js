class Api{
    constructor(url) {
       this.url = url
    }
    async getData(){
       return await fetch(this.url)
           .then(resp => resp.json())
    }
}
export default Api