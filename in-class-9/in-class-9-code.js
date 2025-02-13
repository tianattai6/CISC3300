// Create a function to return true if a given string params includes the
// word “pinecone”, you can use the .includes builtin string function.
function includesPinecone(str){
    if (str.includes("pinecone"))
        return true;
}

// Create an array that contains few sentences at different indexes and include pinecone
// in at least one of them
const sentences = [
    "I love nature.",
    "Have you heard of a pinecone?",
    "The sky is blue.",
    "I am tired.",
    "Filters are cool",
    "A pinecone and a seashell are in a box",
    "Squirrels would like a pinecone",
    "What time is it?"
];

// Use the filter function to create a new array using the function you created.
const filteredSentences = sentences.filter(includesPinecone);

// Output
console.log(filteredSentences);
