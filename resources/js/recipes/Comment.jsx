import { useEffect, useState } from "react";
import { useParams } from "react-router";
import "./Comment.scss";
import CommentRating from "./CommentRating";
import { useContext } from "react";
import UserContext from "./UserContext";
import FavouriteContext from "./FavouriteContext";
// import Popupwindow from "./Popupwindow";
import UserStatusPoppupWindow from "./UserStatusPoppupWindow";
import axios from "axios";

export default function Comment({ recipe_id, rating }) {
    const { id } = useParams();
    const [comment, setComment] = useState("");
    const [displayComment, setDisplayComment] = useState([]);

    const { user } = useContext(UserContext);
    const {
        additemsToFavourites,
        active,
        setActive,
        userActive,
        setUserActive,
    } = useContext(FavouriteContext);

    const getCommentTime = (datetime) => {
        const date = new Date(datetime);
        const [month, day, year] = [
            date.getMonth(),
            date.getDate(),
            date.getFullYear(),
        ];

        return day + "-" + month + "-" + year;
    };

    const handleCommentChange = (ev) => {
        setComment(ev.target.value);
    };

    const submitComment = async (event) => {
        event.preventDefault();

        const response = await axios.post(
            "/api/comments/" + recipe_id,
            JSON.stringify({ comment, rating })
        );

        if (response.status === 200) {
            // alert("submit successed 🎉");
            setComment("");
            displayData();
        }
    };

    const displayData = async () => {
        const response = await fetch(`/api/comments/${id}`);
        const data = await response.json();
        console.log(data);
        setDisplayComment(data);
    };

    useEffect(() => {
        displayData();
    }, []);

    return (
        <>
            {userActive == false ? <UserStatusPoppupWindow /> : ""}
            <div id="commentSection">
                <textarea
                    id="commentInput"
                    placeholder="Post your comment"
                    value={comment}
                    onInput={handleCommentChange}
                ></textarea>
                <div className="submit-container">
                    <button
                        id="submitComment"
                        onClick={(e) => {
                            user ? submitComment(e) : setUserActive(false);
                        }}
                    >
                        Submit
                    </button>
                </div>
            </div>
            <h3 className="review">Review</h3>
            <div id="comments">
                <div>
                    {displayComment.map((comment) => {
                        return (
                            <div className="comment" key={comment.id}>
                                <p className="user_name">
                                    {comment.user.name}:
                                </p>
                                <CommentRating score={comment.rating} />
                                <p className="comment_content">
                                    {comment.comment}
                                </p>
                                <hr />
                                <p className="create_at">
                                    {getCommentTime(comment.created_at)}
                                </p>
                            </div>
                        );
                    })}
                </div>
            </div>
        </>
    );
}
