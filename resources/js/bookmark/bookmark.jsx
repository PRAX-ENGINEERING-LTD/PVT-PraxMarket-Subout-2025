import ReactDOM from 'react-dom/client';
import Bookmark from './components/Bookmark';

const element = document.getElementById('bookmark');

if (element) {
    const props = {
        getRecommendedSuppliers: element.dataset.getRecommendedSuppliers,
        getBookmarkedCompanies: element.dataset.getBookmarkedCompanies,
        getApprovedSuppliers: element.dataset.getApprovedSuppliers,
        getSelectedSuppliers: element.dataset.getSelectedSuppliers,
    };

    const root = ReactDOM.createRoot(element);
    root.render(<Bookmark {...props} />);
}
