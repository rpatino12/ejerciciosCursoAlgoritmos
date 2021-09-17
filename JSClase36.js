function secondLargestNumber(numbers) {
    let first = numbers[0]
    let second = 0;
    for (let i = 0; i < numbers.length; i++) { //iniciamos el ciclo que corra mientras i sea menor que la longitud de la matriz
        if (numbers[i] > first) {
            second = first;
            first = numbers[i]
        }
        if (numbers[i] > second && numbers[i] < first) {
            second = numbers [i];
        }
    }
    return second 
}
let nums = [8,4,6,10,9,23,11,50]
console.log("Second largest number is: " + secondLargestNumber(nums))