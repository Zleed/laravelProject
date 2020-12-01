import React, {useState} from 'react';
import ReactDOM from 'react-dom';

function FollowButton(props) {

    const [follow, setFollow] = useState(props.follow)

    const ClickEvent = (userId) => {
        axios.post(`/follow/${userId}`)
            .then(res => setFollow(!follow))
            .catch(error => {
                if(error.response.status == 401)
                    window.location = '/login';
            });
    }

    const followButton = () => {
        if (follow)
            return <button onClick={() => ClickEvent(props.userId)} className="btn btn-outline-secondary">
                <strong>Unfollow</strong></button>
        return <button onClick={() => ClickEvent(props.userId)} className="btn btn-primary "><strong>Follow</strong>
        </button>
    }

    return followButton();
}

export default FollowButton;

if (document.getElementById('follow')) {
    const propsContainer = document.getElementById("follow");
    const props = Object.assign({}, propsContainer.dataset);
    ReactDOM.render(<FollowButton {...props}/>, document.getElementById('follow'));
}
