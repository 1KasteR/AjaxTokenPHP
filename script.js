// Function to fetch data with token-based authentication
async function fetchData(url, token) {
    try {
        const response = await fetch(url, {
            method: 'GET', // or 'POST', 'PUT', 'DELETE', etc.
            headers: {
                'Content-Type': 'application/json',
                'Authorization': `Bearer ${token}`
            }
        });

        if (!response.ok) {
            throw new Error('Network response was not ok ' + response.statusText);
        }

        const data = await response.json();
        console.log(data);
    } catch (error) {
        console.error('There has been a problem with your fetch operation:', error);
    }
}

// Example usage
const apiURL = 'https://api.example.com/protected/resource';
const token = 'your-access-token-here';
fetchData(apiURL, token);
