USE [online_shopping]
GO

/****** Object:  Table [dbo].[user]    Script Date: 02/11/2016 10:41:29 È.Ù ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

SET ANSI_PADDING ON
GO

CREATE TABLE [dbo].[user](
	[UID] [int] NOT NULL,
	[email] [varchar](50) NOT NULL,
	[last_name] [nvarchar](50) NOT NULL,
	[first_name] [nvarchar](50) NOT NULL,
	[phone] [char](11) NOT NULL,
	[address] [nvarchar](100) NOT NULL,
	[password] [char](10) NOT NULL,
 CONSTRAINT [PK_online_shopping] PRIMARY KEY CLUSTERED 
(
	[UID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO

SET ANSI_PADDING OFF
GO

ALTER TABLE [dbo].[user]  WITH CHECK ADD  CONSTRAINT [CONSTRAINT_PHONE_USER] CHECK  ((NOT [phone] like '%[^0-9]%'))
GO

ALTER TABLE [dbo].[user] CHECK CONSTRAINT [CONSTRAINT_PHONE_USER]
GO


