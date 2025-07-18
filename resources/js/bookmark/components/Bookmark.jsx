import React, { useEffect, useState } from 'react';
import Carousel from 'react-multi-carousel';
import 'react-multi-carousel/lib/styles.css';
import { FaChevronLeft, FaChevronRight } from 'react-icons/fa';
import CompanyCard from './companyCard';
import { FaRegHandshake } from "react-icons/fa6";
import { AiOutlineDelete } from "react-icons/ai";
import { FiEdit } from "react-icons/fi";
import { LuPlus } from "react-icons/lu";
import CreateFolderModal from './createFolderModal';
import DeleteConfirmationModal from './deleteConfirmationModal';
import MoveGroupModal from './moveGroupModal';


const Bookmark = ({ getRecommendedSuppliers, getBookmarkedCompanies, getApprovedSuppliers, getSelectedSuppliers, getBookmarkAds, getAvailableCustomBookmarkApis, addNewBookmarkFolder, deleteBookmarkFolder, updateBookmarkFolder }) => {
    const [recommendedSuppliers, setRecommendedSuppliers] = useState([]);
    const [bookmarkSuppliers, setBookmarkSuppliers] = useState([]);
    const [bookmarkSuppliersCount, setBookmarkSuppliersCount] = useState(0);
    const [approvedSuppliers, setApprovedSuppliers] = useState([]);
    const [approvedSuppliersCount, setApprovedSuppliersCount] = useState(0);
    const [selectedSuppliers, setSelectedSuppliers] = useState([]);
    const [selectedSuppliersCount, setSelectedSuppliersCount] = useState(0);
    const [bookmarkAds, setBookmarkAds] = useState({});
    const [isCreateFolderModalOpen, setIsCreateFolderModalOpen] = useState(false);
    const [isDeleteConfirmationModalOpen, setIsDeleteConfirmationModalOpen] = useState(false);
    const [isDeleteCompanyConfirmationModalOpen, setIsDeleteCompanyConfirmationModalOpen] = useState(false);
    const [onDeleteCompany, setOnDeleteCompany] = useState({});
    const [isDeleting, setIsDeleting] = useState(false);
    const [isCreatingFolder, setIsCreatingFolder] = useState(false);
    const [isDeletingFolder, setIsDeletingFolder] = useState(false);
    const [folderToDelete, setFolderToDelete] = useState(null);
    const [isUpdatingFolder, setIsUpdatingFolder] = useState(false);
    const [folderToUpdate, setFolderToUpdate] = useState(null);
    const [modalMode, setModalMode] = useState('create'); // 'create' or 'update'
    const [customFolder, setCustomFolder] = useState([]);
    const [customFolderData, setCustomFolderData] = useState([]);
    const [isMoveGroupModalOpen, setIsMoveGroupModalOpen] = useState(false);
    const [groupTransferDetails, setGroupTransferDetails] = useState([]);


    // Filter states for bookmarked suppliers
    const [bookmarkedFilters, setBookmarkedFilters] = useState({
        catagoryID: '',
        availablityStatus: '',
        distance: ''
    });

    // Filter states for approved suppliers
    const [approvedFilters, setApprovedFilters] = useState({
        catagoryID: '',
        availablityStatus: '',
        distance: ''
    });

    useEffect(() => {
        $.ajax({
            url: getRecommendedSuppliers,
            method: 'GET',
            success: (response) => {
                console.log('RecommendedSuppliers:', response);
                setRecommendedSuppliers(response.recomendedCompanies);
            },
            error: (xhr, status, error) => {
                console.error('Error loading RecommendedSuppliers:', error);
            },
        });
        $.ajax({
            url: getAvailableCustomBookmarkApis,
            method: 'GET',
            success: (response) => {
                console.log('getAvailableCustomBookmarkApis:', response);
                setCustomFolder(response);
            },
            error: (xhr, status, error) => {
                console.error('Error loading getAvailableCustomBookmarkApis:', error);
            },
        });
        fetchBookmarkedCompanies();
        fetchApprovedCompanies();
        $.ajax({
            url: getSelectedSuppliers,
            method: 'GET',
            success: (response) => {
                console.log('SelectedSuppliers:', response);
                setSelectedSuppliers(response.selectedCompanies);
                setSelectedSuppliersCount(response.selectedCompaniesCount);
            },
            error: (xhr, status, error) => {
                console.error('Error loading SelectedSuppliers:', error);
            },
        });
        $.ajax({
            url: getBookmarkAds,
            method: 'GET',
            success: (response) => {
                console.log('BookmarkADD:', response);
                setBookmarkAds(response);
            },
            error: (xhr, status, error) => {
                console.error('Error loading BookmarkADD:', error);
            },
        });
    }, [getRecommendedSuppliers, getBookmarkedCompanies, getApprovedSuppliers, getSelectedSuppliers, getBookmarkAds]);

    // Effect to refetch bookmarked companies when filters change
    useEffect(() => {
        fetchBookmarkedCompanies(bookmarkedFilters);
    }, [bookmarkedFilters]);

    // Effect to refetch approved companies when filters change
    useEffect(() => {
        fetchApprovedCompanies(approvedFilters);
    }, [approvedFilters]);

    const responsive = {
        desktop: {
            breakpoint: { max: 3000, min: 1024 },
            items: 5,
            partialVisibilityGutter: 40,
        },
        tablet: {
            breakpoint: { max: 1024, min: 464 },
            items: 2,
            partialVisibilityGutter: 30,
        },
        mobile: {
            breakpoint: { max: 464, min: 0 },
            items: 1,
            partialVisibilityGutter: 30,
        },
    };
    const responsive2 = {
        desktop: {
            breakpoint: { max: 3000, min: 1024 },
            items: 3,
            partialVisibilityGutter: 40,
        },
        tablet: {
            breakpoint: { max: 1024, min: 464 },
            items: 2,
            partialVisibilityGutter: 30,
        },
        mobile: {
            breakpoint: { max: 464, min: 0 },
            items: 1,
            partialVisibilityGutter: 30,
        },
    };

    const CustomButtonGroupAsArrows = ({ next, previous, ...rest }) => {
        return (
            <div className="absolute top-4 right-3 -translate-y-1/2 z-50 flex space-x-2">
                <button
                    onClick={previous}
                    className="bg-[#333333]/40 p-2 rounded-lg shadow hover:bg-[#333333]/50 cursor-pointer"
                >
                    <FaChevronLeft className='text-white' />
                </button>
                <button
                    onClick={next}
                    className="bg-[#333333]/40 p-2 rounded-lg shadow hover:bg-[#333333]/50 cursor-pointer"
                >
                    <FaChevronRight className='text-white' />
                </button>
            </div>
        );
    };

    const chunkArray = (array, size) => {
        const chunked = [];
        for (let i = 0; i < array.length; i += size) {
            chunked.push(array.slice(i, i + size));
        }
        return chunked;
    };

    // New function for 2-row grouping pattern: 1,2,3 / 4,5,6 | 7,8,9 / 10,11,12 | etc.
    const groupArrayInTwoRows = (array) => {
        const grouped = [];
        const itemsPerColumn = 6; // 3 items in top row + 3 items in bottom row
        
        for (let i = 0; i < array.length; i += itemsPerColumn) {
            const columnItems = array.slice(i, i + itemsPerColumn);
            
            // Split into top row (first 3) and bottom row (next 3)
            const topRow = columnItems.slice(0, 3);
            const bottomRow = columnItems.slice(3, 6);
            
            // Create pairs for each row position
            const pairs = [];
            const maxLength = Math.max(topRow.length, bottomRow.length);
            
            for (let j = 0; j < maxLength; j++) {
                const pair = [];
                if (topRow[j]) pair.push(topRow[j]);
                if (bottomRow[j]) pair.push(bottomRow[j]);
                if (pair.length > 0) pairs.push(pair);
            }
            
            grouped.push(...pairs);
        }
        
        return grouped;
    };

    const formatCountWithLeadingZero = (count) => {
        return count < 10 ? `0${count}` : count.toString();
    };


    const bookmarkgrouped = groupArrayInTwoRows(bookmarkSuppliers);
    const approvedgrouped = chunkArray(approvedSuppliers, 2);

    const EmptyItemsMessage = () => (
        <div className="flex flex-col w-full items-center justify-center text-center text-gray-500 py-10 h-[400px]">
            <FaRegHandshake className='text-black text-2xl' />
            <h3 className='text-black text-lg font-bold'>No Suppliers Added Yet</h3>
            <p className='text-black text-sm font-normal max-w-xs'>Start adding profiles to keep track of the suppliers you’re interested in.</p>
        </div>
    )

    const onClickDeleteCompany = () => {
        if (onDeleteCompany && onDeleteCompany.deleteUrl) {
            setIsDeleting(true);
            $.ajax({
                url: onDeleteCompany.deleteUrl,
                method: 'GET',
                success: (response) => {
                    console.log('Company deleted successfully:', response);
                    setIsDeleteCompanyConfirmationModalOpen(false);
                    setOnDeleteCompany({});
                    setIsDeleting(false);

                    // Refresh the data after successful deletion using filter-aware functions
                    fetchBookmarkedCompanies(bookmarkedFilters);
                    fetchApprovedCompanies(approvedFilters);
                    fetchCustomFolders();

                    // Re-fetch selected companies
                    $.ajax({
                        url: getSelectedSuppliers,
                        method: 'GET',
                        success: (response) => {
                            setSelectedSuppliers(response.selectedCompanies);
                            setSelectedSuppliersCount(response.selectedCompaniesCount);
                        }
                    });
                },
                error: (xhr, status, error) => {
                    console.error('Error deleting company:', error);
                    setIsDeleteCompanyConfirmationModalOpen(false);
                    setIsDeleting(false);
                    // You might want to show an error message to the user here
                },
            });
        }
    }

    const fetchBookmarkedCompanies = (filters = {}) => {
        const queryParams = new URLSearchParams();

        if (filters.catagoryID) {
            queryParams.append('catagoryID', filters.catagoryID);
        }
        if (filters.availablityStatus) {
            queryParams.append('availablityStatus', filters.availablityStatus);
        }
        if (filters.distance) {
            queryParams.append('distance', filters.distance);
        }

        const url = queryParams.toString() ? `${getBookmarkedCompanies}?${queryParams.toString()}` : getBookmarkedCompanies;

        $.ajax({
            url: url,
            method: 'GET',
            success: (response) => {
                console.log('BookmarkSuppliers:', response);
                setBookmarkSuppliers(response.bookmarkedCompanies);
                setBookmarkSuppliersCount(response.bookmarkedCompaniesCount);
                setGroupTransferDetails(response.groupTransferDetails);
            },
            error: (xhr, status, error) => {
                console.error('Error loading BookmarkSuppliers:', error);
            },
        });
    };

    const fetchApprovedCompanies = (filters = {}) => {
        const queryParams = new URLSearchParams();

        if (filters.catagoryID) {
            queryParams.append('catagoryID', filters.catagoryID);
        }
        if (filters.availablityStatus) {
            queryParams.append('availablityStatus', filters.availablityStatus);
        }
        if (filters.distance) {
            queryParams.append('distance', filters.distance);
        }

        const url = queryParams.toString() ? `${getApprovedSuppliers}?${queryParams.toString()}` : getApprovedSuppliers;

        $.ajax({
            url: url,
            method: 'GET',
            success: (response) => {
                console.log('ApprovedSuppliers:', response);
                setApprovedSuppliers(response.approvedCompanies);
                setApprovedSuppliersCount(response.approvedCompaniesCount);
            },
            error: (xhr, status, error) => {
                console.error('Error loading ApprovedSuppliers:', error);
            },
        });
    };

    const handleBookmarkedFilterChange = (filterName, value) => {
        setBookmarkedFilters(prev => ({
            ...prev,
            [filterName]: value
        }));
    };

    const handleApprovedFilterChange = (filterName, value) => {
        setApprovedFilters(prev => ({
            ...prev,
            [filterName]: value
        }));
    };

    const onClickMove = (company, targetFolder) => {
        let moveUrl = '';

        switch (targetFolder) {
            case 'BOOKMARKED':
                moveUrl = company.moveToBookmarked;
                break;
            case 'APPROVED':
                moveUrl = company.moveToApproved;
                break;
            case 'SELECTED':
                moveUrl = company.moveToSelected;
                break;
            case 'GROUP':
                setGroupTransferDetails(company.groupTransferDetails || []);
                setIsMoveGroupModalOpen(true);
                return;
            default:
                console.error('Invalid target folder:', targetFolder);
                return;
        }

        if (moveUrl) {
            $.ajax({
                url: moveUrl,
                method: 'GET',
                success: (response) => {
                    console.log(`Company moved to ${targetFolder} successfully:`, response);

                    // Refresh all sections after successful move
                    fetchBookmarkedCompanies(bookmarkedFilters);
                    fetchApprovedCompanies(approvedFilters);
                    fetchCustomFolders();

                    // Re-fetch selected companies
                    $.ajax({
                        url: getSelectedSuppliers,
                        method: 'GET',
                        success: (response) => {
                            setSelectedSuppliers(response.selectedCompanies);
                            setSelectedSuppliersCount(response.selectedCompaniesCount);
                        }
                    });
                },
                error: (xhr, status, error) => {
                    console.error(`Error moving company to ${targetFolder}:`, error);
                },
            });
        }
    };

    const fetchCustomFolders = async () => {
        try {
            const folderPromises = customFolder.map(url =>
                new Promise((resolve, reject) => {
                    $.ajax({
                        url: url,
                        method: 'GET',
                        success: (response) => resolve(response),
                        error: (xhr, status, error) => reject(error)
                    });
                })
            );

            const folderPromisesWithReplacedUrls = customFolder.map(url => {
                const replacedUrl = url.replace('http://localhost/PVT-PraxMarket-Subout-2025', 'http://127.0.0.1:8000');
                console.log('Replaced URL:', replacedUrl);
                return new Promise((resolve, reject) => {
                    $.ajax({
                        url: replacedUrl,
                        method: 'GET',
                        success: (response) => resolve(response),
                        error: (xhr, status, error) => reject(error)
                    });
                });
            });
            const folderData = await Promise.all(folderPromisesWithReplacedUrls);
            setCustomFolderData(folderData);
        } catch (error) {
            console.error('Error fetching custom folders:', error);
        }
    };

    // Effect to fetch custom folder data when customFolder URLs change
    useEffect(() => {
        if (customFolder.length > 0) {
            fetchCustomFolders();
        }
    }, [customFolder]);

    const onCreateFolder = async (folderName) => {
        setIsCreatingFolder(true);

        try {
            const response = await new Promise((resolve, reject) => {
                $.ajax({
                    url: addNewBookmarkFolder,
                    method: 'POST',
                    data: {
                        folderName: folderName,
                        _token: $('meta[name="csrf-token"]').attr('content')
                    },
                    success: (response) => {
                        console.log('Folder created successfully:', response);
                        resolve(response);
                    },
                    error: (xhr, status, error) => {
                        console.error('Error creating folder:', error);
                        reject(error);
                    }
                });
            });

            // Refresh the custom folders list after creating a new folder
            $.ajax({
                url: getAvailableCustomBookmarkApis,
                method: 'GET',
                success: (response) => {
                    console.log('Refreshed custom folders:', response);
                    setCustomFolder(response);
                },
                error: (xhr, status, error) => {
                    console.error('Error refreshing custom folders:', error);
                }
            });

            setIsCreateFolderModalOpen(false);

        } catch (error) {
            console.error('Error creating folder:', error);
            alert('Failed to create folder. Please try again.');
        } finally {
            setIsCreatingFolder(false);
        }
    };

    const onUpdateFolder = async (folderName, folderData) => {
        const folderID = folderData.folderUrl.split('/').pop();

        setIsUpdatingFolder(true);

        try {
            const response = await new Promise((resolve, reject) => {
                $.ajax({
                    url: updateBookmarkFolder,
                    method: 'POST',
                    data: {
                        folderName: folderName,
                        folderID: folderID,
                        _token: $('meta[name="csrf-token"]').attr('content')
                    },
                    success: (response) => {
                        console.log('Folder updated successfully:', response);
                        resolve(response);
                    },
                    error: (xhr, status, error) => {
                        console.error('Error updating folder:', error);
                        reject(error);
                    }
                });
            });

            // Refresh the custom folders list after updating a folder
            $.ajax({
                url: getAvailableCustomBookmarkApis,
                method: 'GET',
                success: (response) => {
                    console.log('Refreshed custom folders after update:', response);
                    setCustomFolder(response);
                },
                error: (xhr, status, error) => {
                    console.error('Error refreshing custom folders:', error);
                }
            });

            setIsCreateFolderModalOpen(false);
            setFolderToUpdate(null);
            setModalMode('create');

        } catch (error) {
            console.error('Error updating folder:', error);
            alert('Failed to update folder. Please try again.');
        } finally {
            setIsUpdatingFolder(false);
        }
    };

    const handleFolderModalSubmit = (folderName, folderData) => {
        if (modalMode === 'create') {
            onCreateFolder(folderName);
        } else {
            onUpdateFolder(folderName, folderData);
        }
    };

    const onDeleteFolder = async (folderUrl) => {
        // Extract folder ID from URL
        const folderID = folderUrl.split('/').pop();

        setIsDeletingFolder(true);

        try {
            const response = await new Promise((resolve, reject) => {
                $.ajax({
                    url: deleteBookmarkFolder,
                    method: 'POST',
                    data: {
                        folderID: folderID,
                        _token: $('meta[name="csrf-token"]').attr('content')
                    },
                    success: (response) => {
                        console.log('Folder deleted successfully:', response);
                        resolve(response);
                    },
                    error: (xhr, status, error) => {
                        console.error('Error deleting folder:', error);
                        reject(error);
                    }
                });
            });

            // Refresh the custom folders list after deleting a folder
            $.ajax({
                url: getAvailableCustomBookmarkApis,
                method: 'GET',
                success: (response) => {
                    console.log('Refreshed custom folders after delete:', response);
                    setCustomFolder(response);
                },
                error: (xhr, status, error) => {
                    console.error('Error refreshing custom folders:', error);
                }
            });

            // Close the confirmation modal
            setIsDeleteConfirmationModalOpen(false);

        } catch (error) {
            console.error('Error deleting folder:', error);
            alert('Failed to delete folder. Please try again.');
        } finally {
            setIsDeletingFolder(false);
        }
    };


    return (
        <>
            <div className="md:px-5 px-2 py-5 w-full">
                <div className="grid grid-cols-12 gap-4">
                    <div className="md:col-span-9 col-span-12">
                        <div className="relative bg-white border border-gray-300 rounded-lg px-4 pb-4">
                            <div className="flex sm:mb-0 mb-6">
                                <span className="bg-orange-500 text-white text-sm font-semibold px-3 py-1 pb-2 rounded-b-lg">
                                    Recommended Suppliers
                                </span>
                            </div>
                            <Carousel
                                responsive={responsive}
                                arrows={false}
                                customButtonGroup={<CustomButtonGroupAsArrows />}
                                infinite
                                autoPlaySpeed={3000}
                                keyBoardControl
                                customTransition="transform 700ms ease-in-out"
                                transitionDuration={500}
                                containerClass="relative pt-10 -mt-4"
                                removeArrowOnDeviceType={[]}
                                showDots={false}
                                itemClass="px-2"
                                swipeable
                            >
                                {recommendedSuppliers.map((supplier) => (
                                    <CompanyCard
                                        key={supplier.id}
                                        {...supplier}
                                        recommended
                                        moveToBookmarked={supplier.moveToBookmarked}
                                        moveToApproved={supplier.moveToApproved}
                                        moveToSelected={supplier.moveToSelected}
                                        onClickMove={(targetFolder) => onClickMove(supplier, targetFolder)}
                                    />
                                ))}
                            </Carousel>
                        </div>
                    </div>

                    <div className="md:col-span-3 col-span-12">
                        <div className="relative w-full h-full rounded-2xl overflow-hidden bg-gray-100">
                            <img
                                src={bookmarkAds.adAssetUrl ? bookmarkAds.adAssetUrl : "/images/ad.avif"}
                                alt="Pine Forest"
                                className="object-cover w-full h-full rounded-2xl cursor-pointer"
                                style={{ maxHeight: '250px' }}
                                onClick={() => {
                                    const url = bookmarkAds?.adPointingUrl?.startsWith('http')
                                        ? bookmarkAds.adPointingUrl
                                        : `https://${bookmarkAds.adPointingUrl}`;
                                    window.open(url, '_blank');
                                }}
                            />
                        </div>
                    </div>
                </div>
                <div className="mt-8 text-center">
                    <img
                        src="/images/logo.webp"
                        alt="Prax Engineering Ltd"
                        className="mx-auto w-40"
                    />
                    <p className="text-sm italic text-gray-500 mt-2">
                        Trust is our quality and reputation
                    </p>
                </div>

                <div className='grid grid-cols-12 gap-4 mt-8'>
                    <div className='col-span-12 lg:col-span-6'>
                        <div className="flex flex-wrap gap-4 items-center justify-start mb-4">
                            {/* Category Filter */}
                            <div className="relative">
                                <select
                                    className="border border-gray-300 rounded-md py-2 px-4 pr-8 bg-white text-sm shadow-sm"
                                    value={bookmarkedFilters.catagoryID}
                                    onChange={(e) => handleBookmarkedFilterChange('catagoryID', e.target.value)}
                                >
                                    <option value="">Category</option>
                                    <option value="67c85d62ffbee109920dd5e2">sample 133</option>
                                    <option value="67c86253179ba1a66e0a5192">sddsds</option>
                                    <option value="67e3bc5c0e460de8090dcbe2">Sample</option>
                                </select>
                            </div>

                            {/* Distance Filter */}
                            <div className="relative">
                                <select
                                    className="border border-gray-300 rounded-md py-2 px-2 pr-8 bg-white text-sm shadow-sm"
                                    value={bookmarkedFilters.distance}
                                    onChange={(e) => handleBookmarkedFilterChange('distance', e.target.value)}
                                >
                                    <option value="">Distance</option>
                                    <option value="1">Within 1 km</option>
                                    <option value="5">Within 5 km</option>
                                    <option value="10">Within 10 km</option>
                                </select>
                            </div>

                            {/* Availability Filter */}
                            <div className="relative">
                                <select
                                    className="border border-gray-300 rounded-md py-2 px-4 pr-8 bg-white text-sm shadow-sm"
                                    value={bookmarkedFilters.availablityStatus}
                                    onChange={(e) => handleBookmarkedFilterChange('availablityStatus', e.target.value)}
                                >
                                    <option value="">Availability</option>
                                    <option value="available">Available</option>
                                    <option value="4-6 weeks">4-6 weeks</option>
                                    <option value="2-3 months">2-3 months</option>
                                </select>
                            </div>
                        </div>
                        <div className="relative border border-gray-300 rounded-lg px-4 pb-4 gradient-bg">
                            <div className="flex sm:gap-5 gap-3 sm:mb-0 mb-6">
                                <span className="bg-[#7366FF] text-white text-sm font-semibold px-3 py-1 pb-2 rounded-b-lg">
                                    Bookmarked Suppliers
                                </span>
                                <div className='bg-[#f4f4ff] px-3 flex items-center justify-center border-b border-x border-[#7366FF] rounded-b-lg text-[#7366FF] font-bold text-sm'>{formatCountWithLeadingZero(bookmarkSuppliersCount)}</div>
                            </div>
                            {bookmarkgrouped.length === 0 ? (
                                <EmptyItemsMessage />
                            ) : (
                                <Carousel
                                    responsive={responsive2}
                                    arrows={false}
                                    customButtonGroup={<CustomButtonGroupAsArrows />}
                                    // infinite
                                    autoPlaySpeed={3000}
                                    keyBoardControl
                                    customTransition="transform 700ms ease-in-out"
                                    transitionDuration={500}
                                    containerClass="relative pt-10 -mt-4"
                                    removeArrowOnDeviceType={[]}
                                    showDots={false}
                                    itemClass="px-2"
                                    swipeable
                                >
                                    {bookmarkgrouped.map((pair, index) => (
                                        <div key={index} className="flex flex-col gap-4">
                                            {pair.map((bookmark) => (
                                                <CompanyCard
                                                    key={bookmark.id}
                                                    {...bookmark}
                                                    moveToApproved={bookmark.moveToApproved}
                                                    moveToSelected={bookmark.moveToSelected}
                                                    onClickMove={(targetFolder) => onClickMove(bookmark, targetFolder)}
                                                    onDelete={() => {
                                                        setOnDeleteCompany(bookmark);
                                                        setIsDeleteCompanyConfirmationModalOpen(true)
                                                    }}
                                                />
                                            ))}
                                        </div>
                                    ))}
                                </Carousel>
                            )}
                        </div>
                    </div>
                    <div className='col-span-12 lg:col-span-6'>
                        <div className="flex flex-wrap gap-4 items-center justify-end mb-4">
                            {/* Category Filter */}
                            <div className="relative">
                                <select
                                    className="border border-gray-300 rounded-md py-2 px-4 pr-8 bg-white text-sm shadow-sm"
                                    value={approvedFilters.catagoryID}
                                    onChange={(e) => handleApprovedFilterChange('catagoryID', e.target.value)}
                                >
                                    <option value="">Category</option>
                                    <option value="67c85d62ffbee109920dd5e2">sample 133</option>
                                    <option value="67c86253179ba1a66e0a5192">sddsds</option>
                                    <option value="67e3bc5c0e460de8090dcbe2">Sample</option>
                                </select>
                            </div>

                            {/* Distance Filter */}
                            <div className="relative">
                                <select
                                    className="border border-gray-300 rounded-md py-2 px-2 pr-8 bg-white text-sm shadow-sm"
                                    value={approvedFilters.distance}
                                    onChange={(e) => handleApprovedFilterChange('distance', e.target.value)}
                                >
                                    <option value="">Distance</option>
                                    <option value="1">Within 1 km</option>
                                    <option value="5">Within 5 km</option>
                                    <option value="10">Within 10 km</option>
                                </select>
                            </div>

                            {/* Availability Filter */}
                            <div className="relative">
                                <select
                                    className="border border-gray-300 rounded-md py-2 px-4 pr-8 bg-white text-sm shadow-sm"
                                    value={approvedFilters.availablityStatus}
                                    onChange={(e) => handleApprovedFilterChange('availablityStatus', e.target.value)}
                                >
                                    <option value="">Availability</option>
                                    <option value="available">Available</option>
                                    <option value="4-6 weeks">4-6 weeks</option>
                                    <option value="2-3 months">2-3 months</option>
                                </select>
                            </div>
                        </div>
                        <div className="relative border bg-white border-gray-300 rounded-lg px-4 pb-4">
                            <div className="flex sm:gap-5 gap-3 sm:mb-0 mb-6">
                                <span className="bg-[#22C55E] text-white text-sm font-semibold px-3 py-1 pb-2 rounded-b-lg">
                                    Approved Suppliers
                                </span>
                                <div className='bg-[#f1fff6] px-3 flex items-center justify-center border-b border-x border-[#22C55E] rounded-b-lg text-[#22C55E] font-bold text-sm'>{formatCountWithLeadingZero(approvedSuppliersCount)}</div>
                            </div>
                            {approvedgrouped.length === 0 ? (
                                <EmptyItemsMessage />
                            ) : (
                                <Carousel
                                    responsive={responsive2}
                                    arrows={false}
                                    customButtonGroup={<CustomButtonGroupAsArrows />}
                                    infinite
                                    autoPlaySpeed={3000}
                                    keyBoardControl
                                    customTransition="transform 700ms ease-in-out"
                                    transitionDuration={500}
                                    containerClass="relative pt-10 -mt-4"
                                    removeArrowOnDeviceType={[]}
                                    showDots={false}
                                    itemClass="px-2"
                                    swipeable
                                >
                                    {approvedgrouped.map((pair, index) => (
                                        <div key={index} className="flex flex-col gap-4">
                                            {pair.map((bookmark) => (
                                                <CompanyCard
                                                    key={bookmark.id}
                                                    {...bookmark}
                                                    moveToBookmarked={bookmark.moveToBookmarked}
                                                    moveToSelected={bookmark.moveToSelected}
                                                    onClickMove={(targetFolder) => onClickMove(bookmark, targetFolder)}
                                                    onDelete={() => {
                                                        setOnDeleteCompany(bookmark);
                                                        setIsDeleteCompanyConfirmationModalOpen(true)
                                                    }}
                                                />
                                            ))}
                                        </div>
                                    ))}
                                </Carousel>
                            )}
                        </div>
                    </div>
                </div>

                <div className='w-full mt-5'>
                    <div className="group/main relative border bg-white border-gray-300 rounded-lg px-4 pb-4">
                        <div className="flex sm:gap-5 gap-3 sm:mb-0 mb-6">
                            <span className="bg-[#3B82F6] text-white text-sm font-semibold px-3 py-1 pb-2 rounded-b-lg">
                                Selected Suppliers
                            </span>
                            <div className='bg-[#eef4ff] px-3 flex items-center justify-center border-b border-x border-[#3B82F6] rounded-b-lg text-[#3B82F6] font-bold text-sm'>{formatCountWithLeadingZero(selectedSuppliersCount)}</div>
                        </div>
                        {selectedSuppliers.length === 0 ? (
                            <EmptyItemsMessage />
                        ) : (
                            <Carousel
                                responsive={responsive}
                                arrows={false}
                                customButtonGroup={<CustomButtonGroupAsArrows />}
                                infinite
                                autoPlaySpeed={3000}
                                keyBoardControl
                                customTransition="transform 700ms ease-in-out"
                                transitionDuration={500}
                                containerClass="relative pt-10 -mt-4"
                                removeArrowOnDeviceType={[]}
                                showDots={false}
                                itemClass="px-2"
                                swipeable
                            >
                                {selectedSuppliers.map((bookmark, index) => (
                                    <div key={index} className="flex flex-col gap-4">
                                        <CompanyCard
                                            key={bookmark.id}
                                            {...bookmark}
                                            moveToBookmarked={bookmark.moveToBookmarked}
                                            moveToApproved={bookmark.moveToApproved}
                                            onClickMove={(targetFolder) => onClickMove(bookmark, targetFolder)}
                                            onDelete={() => {
                                                setOnDeleteCompany(bookmark);
                                                setIsDeleteCompanyConfirmationModalOpen(true)
                                            }}
                                        />
                                    </div>
                                ))}
                            </Carousel>
                        )}
                    </div>
                </div>

                <div className='w-full flex justify-between items-center mt-5'>
                    <h2 className='md:text-2xl text-xl font-bold'>Custom Groups</h2>
                    <button
                        className="bg-[#5B21B6] text-white px-4 py-2 rounded-lg hover:bg-[#5a21b6da] transition-colors flex items-center gap-2 cursor-pointer"
                        onClick={() => {
                            setModalMode('create');
                            setFolderToUpdate(null);
                            setIsCreateFolderModalOpen(true);
                        }}
                    >
                        <LuPlus className="text-lg" />
                        <p className="!mb-0 text-white">Create Folder</p>
                    </button>
                </div>

                {/* Map the custom folders */}
                {customFolderData.map((folder, folderIndex) => {
                    const folderSuppliers = folder.suppliers || [];
                    const folderSuppliersGrouped = chunkArray(folderSuppliers, 2);
                    const folderUrl = customFolder[folderIndex]; // Get the corresponding URL

                    return (
                        <div key={folderIndex} className='w-full mt-5'>
                            <div className="group/main relative border bg-white border-gray-300 rounded-lg px-4 pb-4">
                                <div className="flex sm:gap-5 gap-3 sm:mb-0 mb-6">
                                    <span className="bg-[#9333EA] text-white text-sm font-semibold px-3 py-1 pb-2 rounded-b-lg">
                                        {folder.folderName}
                                    </span>
                                    <div className='bg-[#f7efff] px-3 flex items-center justify-center border-b border-x border-[#9333EA] rounded-b-lg text-[#9333EA] font-bold text-sm'>
                                        {formatCountWithLeadingZero(folder.totalSupplierCount)}
                                    </div>
                                </div>
                                <div className='group-hover/main:flex hidden absolute z-50 sm:top-4 top-10 right-32 gap-2'>
                                    <div
                                        className='border-2 border-[#22C55E] bg-[#f7fffa] rounded-lg px-2 py-2 text-[#22C55E] hover:text-[#22C55F] cursor-pointer hover:bg-[#f9fffb] hover:scale-105'
                                        onClick={() => {
                                            setFolderToUpdate({
                                                folderUrl: folderUrl,
                                                folderName: folder.folderName
                                            });
                                            setModalMode('update');
                                            setIsCreateFolderModalOpen(true);
                                        }}
                                    >
                                        <FiEdit className='text-sm' />
                                    </div>
                                    <div
                                        className='border-2 border-red-500 bg-[#fff3f3] rounded-lg px-2 py-2 text-red-500 hover:text-red-600 cursor-pointer hover:bg-[#fff8f8] hover:scale-105'
                                        onClick={() => {
                                            setFolderToDelete(folderUrl);
                                            setIsDeleteConfirmationModalOpen(true);
                                        }}
                                    >
                                        <AiOutlineDelete className='text-sm' />
                                    </div>
                                </div>
                                {folderSuppliersGrouped.length === 0 ? (
                                    <EmptyItemsMessage />
                                ) : (
                                    <Carousel
                                        responsive={responsive}
                                        arrows={false}
                                        customButtonGroup={<CustomButtonGroupAsArrows />}
                                        infinite={folderSuppliersGrouped.length > 1}
                                        autoPlaySpeed={3000}
                                        keyBoardControl
                                        customTransition="transform 700ms ease-in-out"
                                        transitionDuration={500}
                                        containerClass="relative pt-10 -mt-4"
                                        removeArrowOnDeviceType={[]}
                                        showDots={false}
                                        itemClass="px-2"
                                        swipeable
                                    >
                                        {folderSuppliersGrouped.map((pair, index) => (
                                            <div key={index} className="flex flex-col gap-4">
                                                {pair.map((supplier) => (
                                                    <CompanyCard
                                                        key={supplier.id}
                                                        {...supplier}
                                                        onDelete={() => {
                                                            setOnDeleteCompany(supplier);
                                                            setIsDeleteCompanyConfirmationModalOpen(true)
                                                        }}
                                                    />
                                                ))}
                                            </div>
                                        ))}
                                    </Carousel>
                                )}
                            </div>
                        </div>
                    );
                })}
            </div>
            <CreateFolderModal
                isOpen={isCreateFolderModalOpen}
                onClose={() => {
                    setIsCreateFolderModalOpen(false);
                    setFolderToUpdate(null);
                    setModalMode('create');
                }}
                onSubmit={handleFolderModalSubmit}
                isLoading={modalMode === 'create' ? isCreatingFolder : isUpdatingFolder}
                mode={modalMode}
                initialFolderName={folderToUpdate?.folderName || ''}
                folderData={folderToUpdate}
            />
            <MoveGroupModal
                isOpen={isMoveGroupModalOpen}
                groupTransferDetails={groupTransferDetails}
                onClose={() => setIsMoveGroupModalOpen(false)}
            />
            <DeleteConfirmationModal
                isOpen={isDeleteConfirmationModalOpen}
                onClose={() => {
                    setIsDeleteConfirmationModalOpen(false);
                    setFolderToDelete(null);
                }}
                onConfirm={() => folderToDelete && onDeleteFolder(folderToDelete)}
                subtitle="You're about to delete this folder. Are you sure you want to delete?"
                isLoading={isDeletingFolder}
            />
            <DeleteConfirmationModal
                isOpen={isDeleteCompanyConfirmationModalOpen}
                onClose={() => { setIsDeleteCompanyConfirmationModalOpen(false) }}
                onConfirm={onClickDeleteCompany}
                subtitle="This company will also be removed from all customised group."
                isLoading={isDeleting}
            />
        </>
    );
};

export default Bookmark;
