import { useState } from 'react';
import { Link } from 'react-router-dom';

const Navbar = () => {
  const [isMenuOpen, setIsMenuOpen] = useState(false);

  return (
    <header className="bg-gradient-to-r from-purple-900 to-fuchsia-950 sticky top-0 z-50 shadow-lg">
      <div className="container mx-auto px-4 py-4">
        <div className="flex items-center justify-between">
          {/* Logo */}
          <div className="flex items-center">
            <Link to="/">
            <span className="text-2xl font-bold text-white bg-clip-text bg-gradient-to-r from-teal-400 to-blue-500">
              Laravel-React
            </span>
             </Link>
          </div>

          {/* Desktop Navigation */}
          <nav className="hidden md:flex space-x-8">
            <Link to="/" className="text-gray-300 hover:text-white transition-colors duration-300 font-medium">
              Home
            </Link>
            <a href="#" className="text-gray-300 hover:text-white transition-colors duration-300 font-medium">
              Products
            </a>
            <a href="#" className="text-gray-300 hover:text-white transition-colors duration-300 font-medium">
              Services
            </a>
            <Link to="login" className="text-gray-300 hover:text-white transition-colors duration-300 font-medium">
              Login
            </Link>
          </nav>

          {/* Mobile Menu Button */}
          <button
            onClick={() => setIsMenuOpen(!isMenuOpen)}
            className="md:hidden text-white hover:text-gray-300 focus:outline-none"
          >
            <svg className="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>

        {/* Mobile Menu */}
        {isMenuOpen && (
          <div className="md:hidden mt-4 space-y-4 pb-4">
            <a href="#" className="block text-gray-300 hover:text-white transition-colors duration-300">
              Home
            </a>
            <a href="#" className="block text-gray-300 hover:text-white transition-colors duration-300">
              Products
            </a>
            <a href="#" className="block text-gray-300 hover:text-white transition-colors duration-300">
              Services
            </a>
            <a href="#" className="block text-gray-300 hover:text-white transition-colors duration-300">
              Contact
            </a>
          </div>
        )}
      </div>
    </header>
  );
};

export default Navbar;