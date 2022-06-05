const getAPI = async () => {
    const res = await fetch('https://randomuser.me/api/?format=csv');

    if (res.ok) {
        const data = await res.json();

        console.log(data);
    }
};

getAPI();