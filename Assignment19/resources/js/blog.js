import axios from 'axios';

// Fetch all blog posts
try {
  const response = await axios.get('/api/posts');
  const posts = response.data;
  // Display the list of posts on the page
} catch (error) {
  console.error(error);
}

// Fetch a specific blog post
try {
  const response = await axios.get('/api/posts/1');
  const post = response.data;
  // Display the post details on the page
} catch (error) {
  console.error(error);
}
