class MainHtmlComponent{
    constructor( jsonData ) {
        this.jsonData = jsonData
        if(this.constructor == MainHtmlComponent) {
            throw new Error('this Class is abstract and all Methods should be reload ')
        }
    }
    render(){
        throw new Error("This method is abstract and must be implemented")
    }
}
export default MainHtmlComponent