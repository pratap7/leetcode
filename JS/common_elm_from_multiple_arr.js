let input = [
  [1, 5, 9], 
  [1, 3, 5], 
  [1, 5, 8],
  [100, 150, 300, 500, 1, 5]
];

    const result = input.reduce((acc, arr) => {
    return acc.filter(item => arr.includes(item));
    });

//console.log(result); 