import "./CommentRating.scss";

export default function CommentRating({ score }) {
    // console.log(score);
    const scoreArray = [...Array(5).keys()];
    // console.log(scoreArray);

    return (
        <>
            <div className="score">
                {scoreArray.map((index) => {
                    return (
                        <span
                            key={index.id}
                            className={score > index ? " star-filled" : "star"}
                        >
                            ☆
                        </span>
                    );
                })}
            </div>
        </>
    );
}
