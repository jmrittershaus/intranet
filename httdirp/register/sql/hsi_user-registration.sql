--
-- Database: `hsi_user-registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `hsi_member`
--

CREATE TABLE `hsi_member` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `telefon` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(200) NOT NULL,
  `access` varchar(1) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `hsi_member`
--

INSERT INTO `users` (`id`, `username`, `name`, `telefon`, `email`, `password`, `access`, `create_at`) VALUES
(1, 'admin', 'Administrator', '00491746521154', 'Adomes@Feilsh.ifk', '$2y$10$NfeDsZwczVwlVPaRgGfwgOsXVcd33jXjmd/PiFol.g3I1hDRZP5n.', '5', '1999-12-31 23:00:55');

--
-- Indexes for table `hsi_member`
--
ALTER TABLE `hsi_member`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hsi_member`
--
ALTER TABLE `hsi_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
