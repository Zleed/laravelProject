import React from 'react';
import ReactDOM from 'react-dom';

function FollowButton(props) {

    const ClickEvent = (userId) => {
        axios.post(`/follow/${userId}`).
            then(res => console.log(res));
    }

    return (
        <button onClick={() => ClickEvent(props.userId)} className="btn btn-primary">Follow</button>
    );
}

export default FollowButton;

if (document.getElementById('follow')) {
    const propsContainer = document.getElementById("follow");
    const props = Object.assign({}, propsContainer.dataset);
    ReactDOM.render(<FollowButton {...props}/>, document.getElementById('follow'));
}
