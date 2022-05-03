 class Helpers{
     /**
      * get auth token
      * @returns {string|null}
      */
     static getToken(){
         const tokenElement = document.querySelector('meta[name="token"]')
         return  tokenElement ? tokenElement.dataset.token : null
     }
     static getLink( text ){
         // const pattern = /(http:\/\/[a-zA-Z0-9\.\/-]+[\/\s\n]|https:\/\/\[a-zA-Z0-9\.\/-]+[\/\s\n])/g;
         const pattern = /(http:\/\/[^\s]+|https:\/\/\[^\s]+)/g;
         const replacement = '<a href="$1" target="_blank">$1</a>';
         return text.replace(pattern, replacement);
     }
 }
 export default Helpers