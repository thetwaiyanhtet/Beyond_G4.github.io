
        function updateDateTime() {
            const now = new Date();

            // Get the current time and format it as HH:mm:ss
            const currentTime = now.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit', second: '2-digit' });

            // Get the current date and format it as YYYY-MM-DD
            const currentDate = now.toISOString().slice(0, 10);

            document.getElementById('date_time').textContent =currentDate+ " " + currentTime;

        }
        setInterval(updateDateTime, 1000);
