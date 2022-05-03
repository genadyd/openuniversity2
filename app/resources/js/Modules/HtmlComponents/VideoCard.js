import MainHtmlComponent from "./MainHtmlComponent";
import Helpers from "../../Helpers/Helpers";

class VideoCard extends MainHtmlComponent {

    render(data) {
        const image_url = data.thumbnails.hasOwnProperty('medium')
            ? data.thumbnails.medium.url
            : '/images/youtube_def.jpg'

        const description = Helpers.getLink(data.description)

        return `<div class="one-card d-flex justify-content-between flex-column my-2 mx-1" >
                    <img src="${image_url}" class="card-img-top" alt="${data.title}">
                        <div class="card-body">
                            <h6 class="card-title">${data.title}</h6>
                            <p class="card-text">${description}</p>
                            <a href="/video/${data.resourceId.videoId}" class="btn btn-primary">Play Video</a>
                        </div>
                    </div>`
    }
}

export default VideoCard