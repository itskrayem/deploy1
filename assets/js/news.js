    // Get the vote count element
    const countElement = document.querySelector('.count');

    // Get the upvote and downvote buttons
    const upvoteButton = document.querySelector('.upvote');
    const downvoteButton = document.querySelector('.downvote');

    // Set the initial vote count
    let count = 0;

    // Handle upvote button click
    upvoteButton.addEventListener('click', function() {
      count++;
      countElement.textContent = count;
    });

    // Handle downvote button click
    downvoteButton.addEventListener('click', function() {
      count--;
      countElement.textContent = count;
    });
 