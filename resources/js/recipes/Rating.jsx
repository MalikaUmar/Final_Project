import "./Rating.scss";

export default function Rating({ setRating, rating }) {
    const setStars = (e) => {
        setRating(e.target.value);
    };

    return (
        <div id="ratingSection">
            <h3>Your rating</h3>
            <div className="rating">
                <input
                    type="radio"
                    name="rating"
                    id="star5"
                    value="5"
                    onClick={setStars}
                    checked={rating == 5}
                />
                <label htmlFor="star5">☆</label>
                <input
                    type="radio"
                    name="rating"
                    id="star4"
                    value="4"
                    onClick={setStars}
                    checked={rating == 4}
                />
                <label htmlFor="star4">☆</label>
                <input
                    type="radio"
                    name="rating"
                    id="star3"
                    value="3"
                    onClick={setStars}
                    checked={rating == 3}
                />
                <label htmlFor="star3">☆</label>
                <input
                    type="radio"
                    name="rating"
                    id="star2"
                    value="2"
                    onClick={setStars}
                    checked={rating == 2}
                />
                <label htmlFor="star2">☆</label>
                <input
                    type="radio"
                    name="rating"
                    id="star1"
                    value="1"
                    onClick={setStars}
                    checked={rating == 1}
                />
                <label htmlFor="star1">☆</label>
            </div>
        </div>
    );
}
