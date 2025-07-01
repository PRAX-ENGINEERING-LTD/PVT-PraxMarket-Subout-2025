
import ReactDOM from 'react-dom/client';
import Bookmark from './bookmark/bookmark';


const machineryDetailsElement = document.getElementById('bookmark');
if (machineryDetailsElement) {
    const root = ReactDOM.createRoot(machineryDetailsElement);
    root.render(<Bookmark />);
}