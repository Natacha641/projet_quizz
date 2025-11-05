const url = 'https://quizz.adrardev.fr/api/question';
const options = {
  method: 'POST',
  headers: {
    authorization: 'bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJpYXQiOjE3Mjg5MjE5NDEsImV4cCI6MTcyODkyNTU0MSwicm9sZXMiOlsiUk9MRV9VU0VSIiwiUk9MRV9BRE1JTiJdLCJ1c2VybmFtZSI6ImFkbUB0ZXN0LmNvbSJ9.UKT--OvRwpujBgxqKt4fQrBEXqZCjCYLvKf8n4o3ybkHNv-KEMY9o5DT6Of3p9VjAGMeI2n5K8AcRAFgVT6g0VVnboaJkn7EhmfVYHg_0eedUzi74D2HW2iUJEY9h6ceb5tJxxB6tAx8A_hC7rFHkSQscZzQgjHpC9PlH5dVrncQhm7_6jnrcM9yiOJCJA7TGNDf8su0eUJT-Gr2qG3HzzMhdPrfubl3NV7tNCloJGXla_G8U_5LnS_nfWPJXiBG54DvOYnbO_QWmuJ9n3Cvh-4HB6gNyBY9gtRrJHaC4AybqFudM7O838Xmu8Dd4FJA0DAvSAFxfANPkFv3-_HPHPSp9NEKP49K_jP64_bEVwZbQfNmIkObDBtdiqi-S4CD1W3sBOCgC_3bGafrFrU9sUc7HpU4nbhShmV-4Q2NMF_YS0bwNZYD0qpgjptOi0XG0tCoz12wiHshbPrqnkvD_j74Wa_pdJDu25UT6483BOWagVxM_TZ91qwEeWB43OI_-Ec8T0eUR2f3OT8nkK4sJFHLM45LjSs2R3Q5DgwGso15s8dJcbUGUT4wjfEPX9xLaMDG3eACHZklZPexIBVPIdkK3wMpogkzSk-9YoC-q8lN6UTVJ1UfD3Ne769587Gu39Z1K0KJP832aJybg85dnNVS_-hYe8-7-9d2OxUbQJA',
    'content-type': 'application/json'
  },
  body: '{"title":"question","description":"1 question du quiz","pointNumber":2,"answers":[{"text":"réponse A","valid":true},{"text":"réponse B","valid":false},{"text":"Réponse C","valid":false},{"text":"Réponse D","valid":false}]}'
};

try {
  const response = await fetch(url, options);
  const data = await response.json();
  console.log(data);
} catch (error) {
  console.error(error);
}