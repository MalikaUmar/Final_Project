import { useEffect, useState } from "react";
import { useParams } from "react-router";
import "./Comment.scss";
import CommentRating from "./CommentRating";

export default function Comment({ recipe_id, rating }) {
    const { id } = useParams();
    const [comment, setComment] = useState("");
    const [displayComment, setDisplayComment] = useState([]);

    const handleCommentChange = (ev) => {
        setComment(ev.target.value);
    };

    const submitComment = async (event) => {
        event.preventDefault();

        const response = await fetch("/api/comments/" + recipe_id, {
            method: "post",
            body: JSON.stringify({ comment, rating }),
            headers: {
                Accept: "application/json",
                "Content-type": "application/json",
                "X-CSRF-TOKEN": document
                    .querySelector('meta[name="csrf-token"]')
                    .getAttribute("content"),
            },
        });

        const data = await response.json();

        if (data.status === "success") {
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
            <div id="commentSection">
                <textarea
                    id="commentInput"
                    placeholder="Post your comment"
                    value={comment}
                    onInput={handleCommentChange}
                ></textarea>
                <div className="submit-container">
                    <button id="submitComment" onClick={submitComment}>
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
                                {/* <p className="rating">{comment.rating}</p> */}
                                <CommentRating score={comment.rating} />
                                <p>{comment.comment}</p>
                                <hr />
                                <p className="create_at">
                                    {comment.created_at}
                                </p>
                            </div>
                        );
                    })}
                </div>
            </div>
        </>
    );
}
