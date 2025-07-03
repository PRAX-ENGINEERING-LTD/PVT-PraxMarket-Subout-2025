
import ReactDOM from 'react-dom/client';
import Bookmark from './components/Bookmark';


const machineryDetailsElement = document.getElementById('bookmark');
if (machineryDetailsElement) {
    const root = ReactDOM.createRoot(machineryDetailsElement);
    root.render(<Bookmark />);
}