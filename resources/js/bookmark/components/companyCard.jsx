import { MdOutlineLocationOn } from "react-icons/md";
import { RiDeleteBin5Line } from "react-icons/ri";
import { LuArrowLeftRight } from "react-icons/lu";


const CompanyCard = ({ path, name, distanceFromYou, id, onDelete, recommended, moveToBookmarked, moveToApproved, moveToSelected, onClickMove, customBookMarkFolder = [] }) => {
    return (
        <div
            className="group border-[1px] border-[#d4d4d4] rounded-[8px] card-box-shadow bg-white transform transition duration-300 hover:-translate-y-1.5 cursor-pointer"
            onClick={() => window.open(`https://praxmarket.com/home?id=${id}`, '_blank')}
        >
            <div className="relative h-[132px] w-full overflow-hidden rounded-t-[8px]">
                <img
                    src={path}
                    alt={name}
                    className="w-full h-full object-cover"
                />
                <div className="group-hover:hidden absolute top-2 left-2 bg-white/80 text-gray-800 text-xs px-2 py-1 rounded shadow flex items-center gap-1 font-medium">
                    <img src={'images/Location.webp'} alt="Location Icon" className='w-4 h-4' /> {distanceFromYou}
                </div>
                <div className="hidden group-hover:flex absolute top-2 items-center justify-between gap-1 font-medium px-3 w-full">
                    {!recommended ? (
                        <div className='flex bg-white/80 text-gray-800 text-xs px-1 py-1 rounded shadow items-center' onClick={(e) => {
                            e.stopPropagation();
                            onDelete()
                        }}
                        >
                            <img src={'images/Delete.webp'} alt="Delete Icon" className='w-5 h-5' />
                        </div>
                    ) : (
                        <div></div>
                    )}
                    {onClickMove && (
                        <div className='relative group/sub flex bg-white/80 text-gray-800 text-xs px-2 py-1 rounded shadow items-center cursor-pointer'
                            onClick={(e) => {
                                e.stopPropagation();
                            }}>
                            <img src={'images/Move-Arrow.webp'} alt="Move Icon" className='w-4 h-4' />

                            {/* Dropdown text, initially hidden */}
                            <div className='absolute top-full -left-16 w-max px-2 py-1 bg-gray-100 text-black text-[10px] rounded shadow-lg hidden pointer-events-none group-hover/sub:flex flex-col group-hover:pointer-events-auto transition-opacity duration-200 whitespace-nowrap z-50 mt-1'>

                                {/* Arrow (triangle) at the top */}
                                <div className="absolute -top-1 left-2/3 -translate-x-1/2 w-2 h-2 bg-gray-100 rotate-45 z-[-1]" />
                                {moveToBookmarked && (<span className='hover:text-purple-600 hover:underline cursor-pointer' onClick={() => onClickMove('BOOKMARKED')}>Move To Bookmarked</span>)}
                                {moveToApproved && (<span className='hover:text-purple-600 hover:underline cursor-pointer' onClick={() => onClickMove('APPROVED')}>Move To Approved</span>)}
                                {moveToSelected && (<span className='hover:text-purple-600 hover:underline cursor-pointer' onClick={() => onClickMove('SELECTED')}>Move To Selected</span>)}
                                {(Array.isArray(customBookMarkFolder) && customBookMarkFolder.length > 0) && (<span className='hover:text-purple-600 hover:underline cursor-pointer' onClick={() => onClickMove('GROUP')}>Move To Group</span>)}
                            </div>
                        </div>
                    )}

                </div>
            </div>
            <div className="p-[12px] font-[500] text-base line-clamp-1 truncate text-black">
                {name}
            </div>
            <div className="absolute bottom-8 left-1/2 -translate-x-1/2 mb-2 z-50 px-3 py-1 bg-purple-600 text-white text-base rounded shadow hidden group-hover:block transition-opacity duration-300 whitespace-nowrap pointer-events-none">
                {name}
                {/* Tooltip arrow */}
                <div className="absolute top-7 left-1/2 -translate-x-1/2 w-2 h-2 bg-purple-600 rotate-45"></div>
            </div>
        </div>
    )
}

export default CompanyCard
