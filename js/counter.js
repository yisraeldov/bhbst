const { useState } = React;

function ButtonClickCounter() {
  const [count, setCount] = useState(0);

  return (
    <div style={{border: '1px solid #ccc', padding: '10px', margin: '10px 0'}}>
      <p>You have clicked the button <strong id='count'>{count}</strong> times.</p>
      <button id='click-me' onClick={() => setCount(count + 1)}>Click me!</button>
    </div>
  );
}

const root = ReactDOM.createRoot(document.getElementById('counter'));
root.render(<ButtonClickCounter />);
