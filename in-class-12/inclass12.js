function createCounter()
{
    // Local variable in the parent execution context
    let count= 0;

    return function()
    {
        count += 1;
        console.log(count);
    }
}

const counter1 = createCounter();
const counter2 = createCounter();

counter1();
counter1();
counter2();
counter1();
counter2();