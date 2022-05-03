import MainHtmlComponent from "./MainHtmlComponent";
import VideoCard from "./VideoCard";

class PlaylistVideosComponent extends MainHtmlComponent
{
    render( playlistContainer, data ) {
        const playlistVideoSection = document.createElement('div')
        const cards = new VideoCard()
        playlistVideoSection.classList.add(
            'playlist-videos-section',
            'my-4',
            'd-flex',
            'justify-content-start',
            'flex-wrap',
            'row')
        let videosCardsList = '';
            data.items.forEach( item =>{
                videosCardsList += cards.render(item.snippet)
            })

        playlistVideoSection.innerHTML = videosCardsList
        playlistContainer.querySelector('.inner-section').appendChild(playlistVideoSection)
    }

}
export default PlaylistVideosComponent