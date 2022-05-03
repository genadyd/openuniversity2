import Helpers from "../../Helpers/Helpers";
import Api from "../Api/Api";
import PlaylistVideosComponent from "../HtmlComponents/PlaylistVideosComponent";

class PlaylistsVideosDomProcessor
{
    /**
     * Binding "click" event on each button
     */
    getPlaylistVideos(){
        const buttons = document.querySelectorAll('.playlist-data .button-area button')
        buttons.forEach(item=>{
            item.addEventListener('click', (e)=>{
                if(item.classList.contains('clicked')){
                    const parentContainer = item.closest('section.playlist-data')
                    this.CloseCurrentPlaylistContainer( parentContainer )
                }else {
                    this.playListVideosCallback(e)
                }
            })
        })
    }

    /**
     * Event processing
     * @param event
     */
    playListVideosCallback( event ){
        this.closeAllOpenedContainers()
        const item = event.target
        const parentContainer = item.closest('section.playlist-data')
        const playlistId = parentContainer.dataset.id
        const token = Helpers.getToken()
        const htmlSection = new PlaylistVideosComponent()
        parentContainer.classList.add('open')
        item.classList.add('clicked')
        item.innerText = 'Close'
        const apiUrl = `/api/playlist/${playlistId}/${token}`
        const api = new Api(apiUrl)
        api.getData().then((response)=>{
            htmlSection.render(parentContainer, response)
        })
    }

    /**
     * Close all "not current" playlists components
     */
    closeAllOpenedContainers(){
        const containers = document.querySelectorAll('.playlist-data')
        containers.forEach(container=>{
            container.classList.remove('open')
            container.querySelector('.playlist-videos-section')?.remove()
            const button = container.querySelector('.button-area button')
            button.classList.remove('clicked')
            button.innerText = 'Go to videos'
        })
    }

    /**
     * Close the "current" playlist component
     */
    CloseCurrentPlaylistContainer( currentContainer ){
        currentContainer.classList.remove('open')
        currentContainer.querySelector('.playlist-videos-section')?.remove()
        const button = currentContainer.querySelector('.button-area button')
        button.classList.remove('clicked')
        button.innerText = 'Go to videos'
    }

}
export default PlaylistsVideosDomProcessor